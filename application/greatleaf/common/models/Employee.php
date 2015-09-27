<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
 * @property string $firstname
 * @property string $middlename
 * @property string $lastname
 * @property string $address
 * @property string $contact
 * @property string $department
 * @property string $position
 * @property string $image
 * @property string $gender
 * @property string $dob
 * @property integer $request_id
 *
 * @property Dtr[] $dtrs
 * @property Request $request
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $file;

    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'address', 'contact', 'department', 'position', 'gender', 'dob'], 'required'],
            [['dob'], 'safe'],
            [['request_id'], 'integer'],
            [['file'],'file'],
            [['firstname', 'middlename', 'lastname', 'address'], 'string', 'max' => 100],
            [['contact', 'department', 'position'], 'string', 'max' => 45],
            [['image'], 'string', 'max' => 200],
            [['gender'], 'string', 'max' => 1]

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'First name',
            'middlename' => 'Middle name',
            'lastname' => 'Last name',
            'address' => 'Address',
            'contact' => 'Contact',
            'department' => 'Department',
            'position' => 'Position',
            'image' => 'Image',
            'gender' => 'Gender',
            'dob' => 'Birthdate',
            'request_id' => 'Request ID',
            'file' => 'Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDtrs()
    {
        return $this->hasMany(Dtr::className(), ['employee_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequest()
    {
        return $this->hasOne(Request::className(), ['id' => 'request_id']);
    }
}

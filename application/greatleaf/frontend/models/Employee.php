<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
 * @property string $firstname
 * @property string $middlename
 * @property string $lastname
 * @property string $dob
 * @property integer $age
 * @property string $gender
 * @property string $email
 * @property string $designation
 * @property string $department
 * @property string $address
 * @property string $username
 * @property string $password
 *
 * @property Access[] $accesses
 * @property Dtr[] $dtrs
 * @property Request[] $requests
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
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
            [['firstname', 'middlename', 'lastname', 'dob', 'age', 'gender', 'email', 'designation', 'department', 'address', 'username', 'password'], 'required'],
            [['dob'], 'safe'],
            [['age'], 'integer'],
            [['address'], 'string'],
            [['firstname', 'middlename', 'lastname', 'email', 'designation', 'department', 'username', 'password'], 'string', 'max' => 100],
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
            'firstname' => 'Firstname',
            'middlename' => 'Middlename',
            'lastname' => 'Lastname',
            'dob' => 'Dob',
            'age' => 'Age',
            'gender' => 'Gender',
            'email' => 'Email',
            'designation' => 'Designation',
            'department' => 'Department',
            'address' => 'Address',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccesses()
    {
        return $this->hasMany(Access::className(), ['employee_id' => 'id']);
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
    public function getRequests()
    {
        return $this->hasMany(Request::className(), ['employee_id' => 'id']);
    }
}

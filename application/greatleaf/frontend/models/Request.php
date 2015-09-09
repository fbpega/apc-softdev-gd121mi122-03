<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "request".
 *
 * @property integer $id
 * @property string $type
 * @property string $date
 * @property string $status
 * @property integer $employee_id
 *
 * @property Employee $employee
 */
class Request extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'request';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'date', 'status', 'employee_id'], 'required'],
            [['date'], 'safe'],
            [['employee_id'], 'integer'],
            [['type', 'status'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'date' => 'Date',
            'status' => 'Status',
            'employee_id' => 'Employee ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(Employee::className(), ['id' => 'employee_id']);
    }
}

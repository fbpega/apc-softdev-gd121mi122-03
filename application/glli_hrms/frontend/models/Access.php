<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "access".
 *
 * @property integer $id
 * @property string $time_in
 * @property string $time_out
 * @property string $date
 * @property integer $employee_id
 *
 * @property Employee $employee
 */
class Access extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'access';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['time_in', 'time_out', 'date', 'employee_id'], 'required'],
            [['time_in', 'time_out', 'date'], 'safe'],
            [['employee_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'time_in' => 'Time In',
            'time_out' => 'Time Out',
            'date' => 'Date',
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

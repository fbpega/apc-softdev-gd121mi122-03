<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dtr".
 *
 * @property integer $id
 * @property string $login
 * @property string $logout
 * @property integer $employee_id
 *
 * @property Employee $employee
 */
class Dtr extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dtr';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login', 'logout'], 'safe'],
            [['employee_id'], 'required'],
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
            'login' => 'Login',
            'logout' => 'Logout',
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

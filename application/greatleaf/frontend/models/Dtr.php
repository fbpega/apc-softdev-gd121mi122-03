<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dtr".
 *
 * @property integer $id
 * @property string $logintime
 * @property string $logouttime
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
            [['logintime', 'logouttime'], 'required'],
            [['logintime', 'logouttime'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'logintime' => 'Logintime',
            'logouttime' => 'Logouttime',
        ];
    }
}

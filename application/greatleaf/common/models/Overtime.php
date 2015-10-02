<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "overtime".
 *
 * @property integer $id
 * @property string $filedby
 * @property string $filedate
 * @property string $reason
 * @property string $startdate
 * @property string $enddate
 *
 * @property User $filedby0
 */
class Overtime extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'overtime';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['filedby', 'reason', 'startdate', 'enddate'], 'required'],
            [['filedate', 'startdate', 'enddate'], 'safe'],
            [['reason'], 'string'],
            [['filedby'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'filedby' => 'Name',
            'filedate' => 'Date filed',
            'reason' => 'Reason',
            'startdate' => 'Start date',
            'enddate' => 'End date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFiledby0()
    {
        return $this->hasOne(User::className(), ['username' => 'filedby']);
    }
}

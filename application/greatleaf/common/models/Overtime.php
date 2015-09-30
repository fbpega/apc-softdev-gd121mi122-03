<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "overtime".
 *
 * @property integer $id
 * @property string $filedate
 * @property string $reason
 * @property string $startdate
 * @property string $enddate
 * @property string $duration
 *
 * @property Request[] $requests
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
            [['filedate', 'startdate', 'enddate'], 'safe'],
            [['reason', 'startdate', 'enddate', 'duration'], 'required'],
            [['reason'], 'string'],
            [['duration'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'filedate' => 'Filedate',
            'reason' => 'Reason',
            'startdate' => 'Startdate',
            'enddate' => 'Enddate',
            'duration' => 'Duration',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequests()
    {
        return $this->hasMany(Request::className(), ['overtime_id' => 'id']);
    }
}

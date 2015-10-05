<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "officialbusiness".
 *
 * @property integer $id
 * @property string $filedby
 * @property string $filedate
 * @property string $department
 * @property string $date
 * @property string $reason
 * @property string $office_timein
 * @property string $office_timeout
 * @property string $site_timein
 * @property string $site_timeout
 * @property string $destination
 * @property string $purpose
 * @property string $accomplishment
 * @property string $remarks
 *
 * @property User $filedby0
 */
class Officialbusiness extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'officialbusiness';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['filedby', 'department', 'date', 'reason', 'office_timein', 'office_timeout', 'site_timein', 'site_timeout', 'destination', 'purpose'], 'required'],
            [['filedate', 'date'], 'safe'],
            [['reason', 'purpose', 'accomplishment', 'remarks'], 'string'],
            [['filedby'], 'string', 'max' => 255],
            [['department'], 'string', 'max' => 45],
            [['office_timein', 'office_timeout', 'site_timein', 'site_timeout'], 'string', 'max' => 50],
            [['destination'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'filedby' => 'Filedby',
            'filedate' => 'Filedate',
            'department' => 'Department',
            'date' => 'Date',
            'reason' => 'Reason',
            'office_timein' => 'Office Timein',
            'office_timeout' => 'Office Timeout',
            'site_timein' => 'Site Timein',
            'site_timeout' => 'Site Timeout',
            'destination' => 'Destination',
            'purpose' => 'Purpose',
            'accomplishment' => 'Accomplishment',
            'remarks' => 'Remarks',
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

<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jobacc".
 *
 * @property integer $id
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
 * @property Request[] $requests
 */
class Jobacc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jobacc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['filedate', 'date', 'office_timein', 'office_timeout', 'site_timein', 'site_timeout'], 'safe'],
            [['department', 'date', 'reason', 'office_timein', 'office_timeout', 'site_timein', 'site_timeout', 'destination', 'purpose'], 'required'],
            [['reason', 'purpose', 'accomplishment', 'remarks'], 'string'],
            [['department'], 'string', 'max' => 45],
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
    public function getRequests()
    {
        return $this->hasMany(Request::className(), ['jobacc_id' => 'id']);
    }
}

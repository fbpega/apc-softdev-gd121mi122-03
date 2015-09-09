<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jobaccomplishment".
 *
 * @property integer $jano
 * @property string $name
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
 */
class Jobaccomplishment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jobaccomplishment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'filedate', 'department', 'date', 'reason', 'office_timein', 'office_timeout', 'site_timein', 'site_timeout', 'destination', 'purpose'], 'required'],
            [['filedate', 'date', 'office_timein', 'office_timeout', 'site_timein', 'site_timeout'], 'safe'],
            [['reason', 'purpose', 'accomplishment', 'remarks'], 'string'],
            [['name', 'department', 'destination'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jano' => 'Jano',
            'name' => 'Name',
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
}

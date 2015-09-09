<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "overtime".
 *
 * @property integer $id
 * @property string $startdate
 * @property string $enddate
 * @property string $duration
 * @property string $reason
 * @property string $status
 * @property string $author
 * @property string $requestdate
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
            [['startdate', 'enddate', 'duration', 'reason', 'status', 'author', 'requestdate'], 'required'],
            [['startdate', 'enddate', 'requestdate'], 'safe'],
            [['reason'], 'string'],
            [['duration'], 'string', 'max' => 10],
            [['status'], 'string', 'max' => 1],
            [['author'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'startdate' => 'Start Date',
            'enddate' => 'End Date',
            'duration' => 'Duration',
            'reason' => 'Reason',
            'status' => 'Status',
            'author' => 'Author',
            'requestdate' => 'Request Date',
        ];
    }
}

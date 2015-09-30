<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cashvoucher".
 *
 * @property integer $id
 * @property string $filedate
 * @property string $type
 * @property string $details
 * @property string $particular
 * @property string $date
 * @property string $receiptno
 * @property string $amount
 * @property string $remarks
 * @property string $total
 * @property string $less_cash_advance
 * @property string $amount_return
 *
 * @property Request[] $requests
 */
class Cashvoucher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cashvoucher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['filedate', 'date'], 'safe'],
            [['type', 'details', 'particular', 'date', 'receiptno', 'amount', 'total', 'less_cash_advance', 'amount_return'], 'required'],
            [['details', 'particular', 'remarks'], 'string'],
            [['amount', 'total', 'less_cash_advance', 'amount_return'], 'number'],
            [['type'], 'string', 'max' => 45],
            [['receiptno'], 'string', 'max' => 11]
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
            'type' => 'Type',
            'details' => 'Details',
            'particular' => 'Particular',
            'date' => 'Date',
            'receiptno' => 'Receiptno',
            'amount' => 'Amount',
            'remarks' => 'Remarks',
            'total' => 'Total',
            'less_cash_advance' => 'Less Cash Advance',
            'amount_return' => 'Amount Return',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequests()
    {
        return $this->hasMany(Request::className(), ['cashvoucher_id' => 'id']);
    }
}

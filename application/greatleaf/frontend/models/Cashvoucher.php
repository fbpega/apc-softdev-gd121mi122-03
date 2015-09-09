<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "cashvoucher".
 *
 * @property integer $cvno
 * @property string $name
 * @property string $filedate
 * @property string $type
 * @property string $details
 * @property string $particular
 * @property string $date
 * @property integer $reciept_no
 * @property string $amount
 * @property string $remarks
 * @property string $total
 * @property string $less_cash_advance
 * @property string $amount_return
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
            [['name', 'filedate', 'type', 'details', 'particular', 'date', 'reciept_no', 'amount', 'remarks', 'total', 'less_cash_advance', 'amount_return'], 'required'],
            [['filedate', 'date'], 'safe'],
            [['details', 'particular', 'remarks'], 'string'],
            [['reciept_no'], 'integer'],
            [['amount', 'total', 'less_cash_advance', 'amount_return'], 'number'],
            [['name'], 'string', 'max' => 100],
            [['type'], 'string', 'max' => 50],
            [['reciept_no'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cvno' => 'Cvno',
            'name' => 'Name',
            'filedate' => 'Filedate',
            'type' => 'Type',
            'details' => 'Details',
            'particular' => 'Particular',
            'date' => 'Date',
            'reciept_no' => 'Reciept No',
            'amount' => 'Amount',
            'remarks' => 'Remarks',
            'total' => 'Total',
            'less_cash_advance' => 'Less Cash Advance',
            'amount_return' => 'Amount Return',
        ];
    }
}

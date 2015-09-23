<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Cashvoucher;

/**
 * SearchCashvoucher represents the model behind the search form about `backend\models\Cashvoucher`.
 */
class SearchCashvoucher extends Cashvoucher
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['filedate', 'type', 'details', 'particular', 'date', 'receiptno', 'remarks'], 'safe'],
            [['amount', 'total', 'less_cash_advance', 'amount_return'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Cashvoucher::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'filedate' => $this->filedate,
            'date' => $this->date,
            'amount' => $this->amount,
            'total' => $this->total,
            'less_cash_advance' => $this->less_cash_advance,
            'amount_return' => $this->amount_return,
        ]);

        $query->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'details', $this->details])
            ->andFilterWhere(['like', 'particular', $this->particular])
            ->andFilterWhere(['like', 'receiptno', $this->receiptno])
            ->andFilterWhere(['like', 'remarks', $this->remarks]);

        return $dataProvider;
    }
}

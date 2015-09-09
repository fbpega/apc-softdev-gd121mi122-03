<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Overtime;

/**
 * OvertimeSearch represents the model behind the search form about `frontend\models\Overtime`.
 */
class OvertimeSearch extends Overtime
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['startdate', 'enddate', 'duration', 'reason', 'status', 'author', 'requestdate'], 'safe'],
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
        $query = Overtime::find();

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
            'startdate' => $this->startdate,
            'enddate' => $this->enddate,
            'requestdate' => $this->requestdate,
        ]);

        $query->andFilterWhere(['like', 'duration', $this->duration])
            ->andFilterWhere(['like', 'reason', $this->reason])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'author', $this->author]);

        return $dataProvider;
    }
}

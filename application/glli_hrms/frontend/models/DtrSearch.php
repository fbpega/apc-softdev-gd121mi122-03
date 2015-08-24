<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dtr;

/**
 * DtrSearch represents the model behind the search form about `app\models\Dtr`.
 */
class DtrSearch extends Dtr
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'lates', 'absences', 'employee_id'], 'integer'],
            [['time_in', 'time_out', 'date'], 'safe'],
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
        $query = Dtr::find();

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
            'time_in' => $this->time_in,
            'time_out' => $this->time_out,
            'date' => $this->date,
            'lates' => $this->lates,
            'absences' => $this->absences,
            'employee_id' => $this->employee_id,
        ]);

        return $dataProvider;
    }
}

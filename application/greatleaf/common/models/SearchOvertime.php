<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Overtime;

/**
 * SearchOvertime represents the model behind the search form about `common\models\Overtime`.
 */
class SearchOvertime extends Overtime
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['filedby', 'filedate', 'reason', 'startdate', 'enddate'], 'safe'],
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
            'filedate' => $this->filedate,
            'startdate' => $this->startdate,
            'enddate' => $this->enddate,
        ]);

        $query->andFilterWhere(['like', 'filedby', $this->filedby])
            ->andFilterWhere(['like', 'reason', $this->reason]);

        return $dataProvider;
    }
}

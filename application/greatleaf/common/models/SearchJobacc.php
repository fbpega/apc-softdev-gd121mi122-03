<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Jobacc;

/**
 * SearchJobacc represents the model behind the search form about `common\models\Jobacc`.
 */
class SearchJobacc extends Jobacc
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['filedate', 'department', 'date', 'reason', 'office_timein', 'office_timeout', 'site_timein', 'site_timeout', 'destination', 'purpose', 'accomplishment', 'remarks'], 'safe'],
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
        $query = Jobacc::find();

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
            'office_timein' => $this->office_timein,
            'office_timeout' => $this->office_timeout,
            'site_timein' => $this->site_timein,
            'site_timeout' => $this->site_timeout,
        ]);

        $query->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'reason', $this->reason])
            ->andFilterWhere(['like', 'destination', $this->destination])
            ->andFilterWhere(['like', 'purpose', $this->purpose])
            ->andFilterWhere(['like', 'accomplishment', $this->accomplishment])
            ->andFilterWhere(['like', 'remarks', $this->remarks]);

        return $dataProvider;
    }
}

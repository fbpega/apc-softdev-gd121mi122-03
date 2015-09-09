<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Jobaccomplishment;

/**
 * SearchJobaccomplishment represents the model behind the search form about `frontend\models\Jobaccomplishment`.
 */
class SearchJobaccomplishment extends Jobaccomplishment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jano'], 'integer'],
            [['name', 'filedate', 'department', 'date', 'reason', 'office_timein', 'office_timeout', 'site_timein', 'site_timeout', 'destination', 'purpose', 'accomplishment', 'remarks'], 'safe'],
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
        $query = Jobaccomplishment::find();

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
            'jano' => $this->jano,
            'filedate' => $this->filedate,
            'date' => $this->date,
            'office_timein' => $this->office_timein,
            'office_timeout' => $this->office_timeout,
            'site_timein' => $this->site_timein,
            'site_timeout' => $this->site_timeout,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'reason', $this->reason])
            ->andFilterWhere(['like', 'destination', $this->destination])
            ->andFilterWhere(['like', 'purpose', $this->purpose])
            ->andFilterWhere(['like', 'accomplishment', $this->accomplishment])
            ->andFilterWhere(['like', 'remarks', $this->remarks]);

        return $dataProvider;
    }
}

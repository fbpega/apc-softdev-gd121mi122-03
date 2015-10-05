<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Officialbusiness;

/**
 * SearchOfficialbusiness represents the model behind the search form about `common\models\Officialbusiness`.
 */
class SearchOfficialbusiness extends Officialbusiness
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['filedby', 'filedate', 'department', 'date', 'reason', 'office_timein', 'office_timeout', 'site_timein', 'site_timeout', 'destination', 'purpose', 'accomplishment', 'remarks'], 'safe'],
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
        $query = Officialbusiness::find();

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
        ]);

        $query->andFilterWhere(['like', 'filedby', $this->filedby])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'reason', $this->reason])
            ->andFilterWhere(['like', 'office_timein', $this->office_timein])
            ->andFilterWhere(['like', 'office_timeout', $this->office_timeout])
            ->andFilterWhere(['like', 'site_timein', $this->site_timein])
            ->andFilterWhere(['like', 'site_timeout', $this->site_timeout])
            ->andFilterWhere(['like', 'destination', $this->destination])
            ->andFilterWhere(['like', 'purpose', $this->purpose])
            ->andFilterWhere(['like', 'accomplishment', $this->accomplishment])
            ->andFilterWhere(['like', 'remarks', $this->remarks]);

        return $dataProvider;
    }
}

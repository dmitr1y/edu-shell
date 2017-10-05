<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\OfflineModules;

/**
 * OfflineModulesSearch represents the model behind the search form about `app\models\OfflineModules`.
 */
class OfflineModulesSearch extends OfflineModules
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'win', 'mac', 'lin'], 'integer'],
            [['name', 'description', 'libs', 'instruction', 'url', 'slug'], 'safe'],
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
        $query = OfflineModules::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'win' => $this->win,
            'mac' => $this->mac,
            'lin' => $this->lin,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'libs', $this->libs])
            ->andFilterWhere(['like', 'instruction', $this->instruction])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'slug', $this->slug]);

        return $dataProvider;
    }
}

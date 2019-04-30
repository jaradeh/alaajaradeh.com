<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Projects;

/**
 * ProjectsSearch represents the model behind the search form about `backend\models\Projects`.
 */
class ProjectsSearch extends Projects {

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['id', 'start_date', 'end_date', 'cost', 'category_id', 'status'], 'integer'],
            [['name', 'description', 'image', 'comments', 'link'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios() {
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
    public function search($params) {
        $query = Projects::find();

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
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'cost' => $this->cost,
            'category_id' => $this->category_id,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
                ->andFilterWhere(['like', 'description', $this->description])
                ->andFilterWhere(['like', 'link', $this->link])
                ->andFilterWhere(['like', 'image', $this->image])
                ->andFilterWhere(['like', 'comments', $this->comments]);

        return $dataProvider;
    }

}

<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Article;

/**
 * ArticleSearch represents the model behind the search form of `app\modules\admin\models\Article`.
 */
class ArticleSearch extends Article
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'hits', 'is_public', 'category_id', 'main_page', 'on_slider'], 'integer'],
            [['title', 'alias', 'short_content', 'content', 'image', 'date_created', 'lid', 'tag'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Article::find();

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
            'hits' => $this->hits,
            'date_created' => $this->date_created,
            'is_public' => $this->is_public,
            'category_id' => $this->category_id,
            'main_page' => $this->main_page,
            'on_slider' => $this->on_slider,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'alias', $this->alias])
            ->andFilterWhere(['like', 'short_content', $this->short_content])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'lid', $this->lid])
            ->andFilterWhere(['like', 'tag', $this->tag]);

        return $dataProvider;
    }
}

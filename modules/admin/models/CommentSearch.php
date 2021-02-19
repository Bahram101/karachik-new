<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Comment;

/**
 * CommentSearch represents the model behind the search form of `app\modules\admin\models\Comment`.
 */
class CommentSearch extends Comment
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'article_id', 'parent_id', 'deleted', 'is_public', 'image_id', 'ispoor', 'isgood', 'video_id'], 'integer'],
            [['content', 'date_created', 'user_name', 'user_email', 'ip'], 'safe'],
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
        $query = Comment::find();

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
            'date_created' => $this->date_created,
            'user_id' => $this->user_id,
            'article_id' => $this->article_id,
            'parent_id' => $this->parent_id,
            'deleted' => $this->deleted,
            'is_public' => $this->is_public,
            'image_id' => $this->image_id,
            'ispoor' => $this->ispoor,
            'isgood' => $this->isgood,
            'video_id' => $this->video_id,
        ]);

        $query->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'user_name', $this->user_name])
            ->andFilterWhere(['like', 'user_email', $this->user_email])
            ->andFilterWhere(['like', 'ip', $this->ip]);

        return $dataProvider;
    }
}

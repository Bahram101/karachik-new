<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\User;

/**
 * UserSearch represents the model behind the search form of `app\modules\admin\models\User`.
 */
class UserSearch extends User
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'logins', 'last_login', 'email_activation', 'is_admin'], 'integer'],
            [['email', 'name', 'password', 'firstname', 'lastname', 'image', 'about', 'register_date', 'activation_code', 'restore_code'], 'safe'],
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
        $query = User::find();

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
            'logins' => $this->logins,
            'last_login' => $this->last_login,
            'register_date' => $this->register_date,
            'email_activation' => $this->email_activation,
            'is_admin' => $this->is_admin,
        ]);

        $query->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'about', $this->about])
            ->andFilterWhere(['like', 'activation_code', $this->activation_code])
            ->andFilterWhere(['like', 'restore_code', $this->restore_code]);

        return $dataProvider;
    }
}

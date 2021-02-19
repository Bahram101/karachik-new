<?php

namespace app\models;

use Yii;

class Tag extends \yii\db\ActiveRecord{

    public static function tableName(){
        return 'tags';
    }


    public function rules(){
        return [
            [['name'], 'required'],
            [['article_id'], 'integer'],
            [['name'], 'string', 'max' => 500],
        ];
    }


    public function attributeLabels(){
        return [
            'id' => 'ID',
            'name' => 'Name',
            'article_id' => 'Article ID',
        ];
    }

    public function getAllTags(){
        return self::find()->orderBy('id desc')->limit(10)->asArray()->all();
    }
}

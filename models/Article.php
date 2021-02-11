<?php
/**
 * Created by PhpStorm.
 * User: Bahram
 * Date: 08.02.2021
 * Time: 12:56
 */

namespace app\models;


use yii\db\ActiveRecord;

class Article extends ActiveRecord{

    public static function tableName(){
        return 'articles';
    }

    public function getCategory(){
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }


    public static function getArticlesForMainPage(){
        $cats = [
            //index - id, value - limit
            '3' => '6',
            '4' => '3',
            '5' => '1'
        ];

        $data = [];
        foreach ($cats as $catId => $limit){
            $data[$catId] = Article::find()->where(['category_id'=> $catId])->orderBy('date_created DESC')->asArray()->limit($limit)->all();
        }

        return $data;
    }
}
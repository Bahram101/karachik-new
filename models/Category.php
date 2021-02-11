<?php
/**
 * Created by PhpStorm.
 * User: Bahram
 * Date: 08.02.2021
 * Time: 13:08
 */

namespace app\models;


use yii\db\ActiveRecord;

class Category extends ActiveRecord{

    public static function tableName(){
        return 'categories';
    }

    public function getArticles(){
        return $this->hasMany(Article::class, ['category_id' => 'id']);
    }





}
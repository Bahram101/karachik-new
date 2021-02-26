<?php
/**
 * Created by PhpStorm.
 * User: Bahram
 * Date: 08.02.2021
 * Time: 12:56
 */

namespace app\models;

use Yii;
use yii\data\Pagination;
use yii\db\ActiveRecord;

class Article extends ActiveRecord{

    public static function tableName(){
        return 'articles';
    }

    public function getCategory(){
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    public function getTags(){
        return $this->hasMany(Tag::class, ['article_id'=>'id']);
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


    public static function getArticlesByCategory($id, $pagesize = 10){
        $id = (int)$id;
        $query = Article::find()->where(['category_id'=>$id]);
        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize' => $pagesize,
            'forcePageParam' => false,
            'pageSizeParam' => false
        ]);
        $articles = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->orderBy('date_created desc')
            ->asArray()
            ->with('category')
            ->all();
        $datas = ['pages' => $pages, 'articles'=>$articles];
        return $datas;
    }


    public static function getArticlesByTag($tag, $pagesize = 10){
        $tags= Tag::find()->where(['name' =>$tag])->asArray()->all();
        $ids = [];
        foreach($tags as $tag){
            $ids[] = $tag['article_id'];
        }
        $query = Article::find()->where(['in', 'id', $ids]);
        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize' => $pagesize,
            'forcePageParam' => false,
            'pageSizeParam' => false
        ]);
        $articles = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->asArray()
            ->all();
        $datas = ['pages' => $pages, 'articles'=>$articles];
        return $datas;
    }

    public function viewedCounter(){
        $this->hits += 1;
        return $this->save(false);
    }






}
<?php
/**
 * Created by PhpStorm.
 * User: Bahra
 * Date: 24.02.2021
 * Time: 14:56
 */

namespace app\controllers;
use app\models\Article;
use app\models\Tag;
use yii\web\Controller;

class ArticleController extends Controller{

    public function actionView($id){
        $article = Article::findOne($id);
        $relatedArticles = $article->getRelatedArticles();
//        $article->viewedCounter();

        return $this->render('view', compact('article','relatedArticles'));
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: Bahra
 * Date: 25.02.2021
 * Time: 1:02
 */

namespace app\controllers;
use app\models\Article;
use app\models\Tag;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;

class TagController extends Controller{

    public function actionView($tag){
        $tag = trim($tag);
        $articles = Article::getArticlesByTag($tag, 3);
        return $this->render('view', [
            'articles'=>$articles['articles'],
            'pages'=>$articles['pages'],
        ]);
    }

}
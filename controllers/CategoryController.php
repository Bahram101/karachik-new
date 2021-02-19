<?php
/**
 * Created by PhpStorm.
 * User: Bahra
 * Date: 18.02.2021
 * Time: 16:43
 */
namespace app\controllers;
use app\models\Article;
use yii\web\Controller;

class CategoryController extends Controller{

    public function actionView($id){

        $articlesForMainPage = Article::getArticlesForMainPage();
        return $this->render('view', compact('articlesForMainPage'));
    }


}
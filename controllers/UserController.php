<?php
/**
 * Created by PhpStorm.
 * User: Bahra
 * Date: 19.02.2021
 * Time: 19:35
 */

namespace app\controllers;
use app\models\LoginForm;
use app\models\User;
use Yii;
use yii\web\Controller;

class UserController extends Controller
{

    public function actionLogin(){
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('/user/login', [
            'model' => $model,
        ]);
    }


    public function actionRegister(){
        if(!Yii::$app->user->isGuest){
            $this->redirect('/');
        }
        $newUser = new User;
        if($newUser->load(Yii::$app->request->post()) && $newUser->save()){
            return $this->redirect(['/user/login']);
        }

        return $this->render('register', compact('newUser'));
    }


    public function actionLogout(){
        Yii::$app->user->logout();
        return $this->goHome();
    }



}
<?php
/**
 * Created by PhpStorm.
 * User: Bahra
 * Date: 19.02.2021
 * Time: 19:35
 */

namespace app\controllers;
use app\models\LoginForm;
use app\models\Mailer;
use app\models\User;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class UserController extends Controller
{

    public function actionLogin(){
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
//        debug(Yii::$app->request->post());die;
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
        if($newUser->load(Yii::$app->request->post()) && $newUser->save() && Mailer::send(Mailer::TYPE_REGISTRATION, $newUser)){
            Yii::$app->session->setFlash('registered', 'Email почтангизни тасдиқланг');
            return $this->redirect(['user/login']);
        }

        return $this->render('register', compact('newUser'));
    }


    public function actionActivate($id, $token){
        $user = User::find()->where(['id'=>$id, 'token'=>$token])->one();
        if(empty($user)){
            throw new NotFoundHttpException('Not found');
        }else{
            $user->activate();
            Yii::$app->session->setFlash('activated', 'Электрон манзилингиз муваффақиятли тасдиқланди');
        }
        return $this->redirect(['user/login']);
    }

    public function actionLogout(){
        Yii::$app->user->logout();
        return $this->goHome();
    }




}
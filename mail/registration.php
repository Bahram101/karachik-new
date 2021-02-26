<?php
/**
 * Created by PhpStorm.
 * User: Bahra
 * Date: 21.02.2021
 * Time: 22:30
 */

use yii\helpers\Html;
use yii\helpers\Url;

$activationUrl = Url::to(['/user/activate', 'id'=>$model->id, 'token'=> $model->token], true);

echo "Салом $model->name! karachik.com сайтига хуш келибсиз!\n, Қуйидаги линкни босиб, e-mail почтангизни тасдиқланг! \n".
    Html::a('http://karachik.loc/user/activate/?id='.$model->id."&token=".$model->token, $activationUrl);
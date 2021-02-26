<?php

namespace app\modules\admin;


use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class Module extends \yii\base\Module{

    public $controllerNamespace = 'app\modules\admin\controllers';

    public function behaviors(){
        return [
            'access'    =>  [
                'class' =>  AccessControl::className(),
                'denyCallback'  =>  function($rule, $action) {
                    throw new \yii\web\NotFoundHttpException();
                },
                'rules' =>  [
                    [
                        'allow' =>  true,
                        'matchCallback' =>  function($rule, $action) {
                            return Yii::$app->user->identity->is_admin;
                        }
                    ]
                ]
            ]
        ];
    }

    public function init(){
        parent::init();
    }
}

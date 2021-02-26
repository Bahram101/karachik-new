<?php
/**
 * Created by PhpStorm.
 * User: Bahra
 * Date: 21.02.2021
 * Time: 17:29
 */

namespace app\models;
use Yii;

class Mailer{

    const TYPE_REGISTRATION = 1;

    private static $from = ['bahram101@mail.ru'=> 'karachik.com'];
    private static $to;
    private static $subject;
    private static $renderFile;
    private static $renderParams = [];

    public static function validate($type, $model){
        switch ($type){
            case self::TYPE_REGISTRATION:
                if(empty($model)){
                    return false;
                }
                self::$to = $model->email;
                self::$subject = 'Please activate your email';
                self::$renderFile = 'registration';
                self::$renderParams = ['model'=>$model];
                break;

            default:
                return false;
        }
        return true;
    }

    public static function send($type, $model){
        if(!self::validate($type, $model)){
            return false;
        }
        $message = Yii::$app->mailer->compose(self::$renderFile, self::$renderParams);
        return $message->setFrom(self::$from)->setTo(self::$to)->setSubject(self::$subject)->send();

    }

}
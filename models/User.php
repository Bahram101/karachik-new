<?php

namespace app\models;

use Yii;
use yii\db\Expression;
use yii\web\IdentityInterface;


class User extends \yii\db\ActiveRecord implements IdentityInterface
{

    const STATUS_INSERTED = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_BLOCKED = 2;

    public static function tableName(){
        return 'users';
    }


    public function rules(){
        return [
            [['name', 'email', 'password'], 'required'],
            [['email'], 'email'],
            [['name', 'email'], 'unique'],
        ];
    }


    public function attributeLabels(){
        return [
            'id' => 'ID',
            'email' => 'Email',
            'name' => 'Name',
            'password' => 'Password',
            'logins' => 'Logins',
            'last_login' => 'Last Login',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'image' => 'Image',
            'about' => 'About',
            'register_date' => 'Register Date',
            'status' => 'Email Activation',
            'token' => 'Activation Code',
            'restore_code' => 'Restore Code',
            'is_admin' => 'Is Admin',
        ];
    }


    public function beforeSave($insert){
        if($this->isNewRecord){
//            $this->password = Yii::$app->getSecurity()->generatePasswordHash($this->password);
            $this->password = $this->passwordHash($this->password);
            $this->register_date = date("Y-m-d H:i:s");
            $this->token = Yii::$app->security->generateRandomString(15);
        }
        return parent::beforeSave($insert);
    }


    public function activate(){
        $this->status = self::STATUS_ACTIVE;
        $this->token = null;
        return $this->save();
    }


    public static function findByUsername($name){
        return User::find()->where(['name'=>$name])->one();
    }


    public function validatePassword($password){
        $passFromForm = $this->passwordHash($password);
        return ($this->password == $passFromForm) ? true : false;
    }


    public function passwordHash($pass){
        return $pass = hash_hmac('sha256', $pass, '1101e597826f9fc37906c7f9de4bfb3f');
    }


    public static function findIdentity($id){
        return User::findOne($id);
    }


    public function getId(){
        return $this->id;
    }

    public static function findIdentityByAccessToken($token, $type = null){}


    public function getAuthKey(){}


    public function validateAuthKey($authKey){}


}

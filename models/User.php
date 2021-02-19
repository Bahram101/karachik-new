<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;


class User extends \yii\db\ActiveRecord implements IdentityInterface
{

    const STATUS_INSERTED = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_BLOCKED = 2;

    public static function tableName()
    {
        return 'users';
    }


    public function rules()
    {
        return [
            [['name', 'email', 'password'], 'required'],
            [['email'], 'email'],
            [['email'], 'unique'],
        ];
    }


    public function attributeLabels()
    {
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
            'email_activation' => 'Email Activation',
            'activation_code' => 'Activation Code',
            'restore_code' => 'Restore Code',
            'is_admin' => 'Is Admin',
        ];
    }

    public function beforeSave($insert){
        if($this->isNewRecord){
//            $this->password = Yii::$app->getSecurity()->generatePasswordHash($this->password);
            $this->register_date = date("Y-m-d H:i:s");
        }
        return parent::beforeValidate();
    }


    public static function findIdentity($id)
    {
        return User::findOne($id);
    }

    public function getId()
    {
        return $this->id;
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        // TODO: Implement findIdentityByAccessToken() method.
    }


    public function getAuthKey()
    {
        // TODO: Implement getAuthKey() method.
    }


    public function validateAuthKey($authKey)
    {
        // TODO: Implement validateAuthKey() method.
    }

    public static function findByEmail($email){
        return User::find()->where(['email'=>$email])->one();
    }

    public function validatePassword($password){
        return ($this->password == $password) ? true : false;
    }
}

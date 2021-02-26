<?php

namespace app\models;

use Yii;
use yii\base\Model;


class LoginForm extends Model
{
    public $name;
    public $password;
    public $rememberMe = true;

    private $_user = false;


    public function rules(){
        return [
            [['name', 'password'], 'required'],
            ['rememberMe', 'boolean'],
            ['password', 'validatePassword'],
        ];
    }

    public function validatePassword($attribute, $params){
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect name or password.');
            }
        }
    }


    public function login(){
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 10 : 0);
        }
        return false;
    }


    public function getUser(){
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->name);
        }

        return $this->_user;
    }
}

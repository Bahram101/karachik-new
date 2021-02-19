<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $email
 * @property string $name
 * @property string $password
 * @property int $logins
 * @property int|null $last_login
 * @property string|null $firstname
 * @property string|null $lastname
 * @property string|null $image
 * @property string|null $about
 * @property string $register_date
 * @property int $email_activation
 * @property string|null $activation_code
 * @property string|null $restore_code
 * @property int $is_admin
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'name', 'password'], 'required'],
            [['logins', 'last_login', 'email_activation', 'is_admin'], 'integer'],
            [['about'], 'string'],
            [['register_date'], 'safe'],
            [['email'], 'string', 'max' => 254],
            [['name'], 'string', 'max' => 32],
            [['password', 'activation_code', 'restore_code'], 'string', 'max' => 64],
            [['firstname'], 'string', 'max' => 50],
            [['lastname'], 'string', 'max' => 60],
            [['image'], 'string', 'max' => 400],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
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
}

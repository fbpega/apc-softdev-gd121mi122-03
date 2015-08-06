<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $firstname;
    public $middlename;
    public $lastname;
    public $gender;
    public $birthdate;
    public $designation;
    public $department;
    public $address;
    public $username;
    public $email;
    public $password;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['firstname', 'required'],
            ['middlename', 'required'],
            ['lastname', 'required'],
            ['gender', 'required'],
            ['birthdate', 'required'],
            ['designation', 'required'],
            ['department', 'required'],
            ['address', 'required'],

            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->firstname = $this->firstname;
            $user->middlename = $this->middlename;
            $user->lastname = $this->lastname;
            $user->birthdate = $this->birthdate;
            $user->designation = $this->designation;
            $user->department = $this->department;
            $user->address = $this->address;
            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
}

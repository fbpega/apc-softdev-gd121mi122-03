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
    public $lastname;
    public $middlename;
    public $middleinit;

    public $empcode;
    public $department;
    public $position;
    public $hiredate;

    public $specialization;
    public $cellno;
    public $officeno;
    public $simpledesc;

    public $file;
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
            ['lastname', 'required'],

            ['empcode', 'required'],
            ['empcode', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This code has already been taken.'],
            ['department', 'required'],
            ['position', 'required'],
            ['hiredate', 'required'],

            ['specialization', 'required'],
            ['cellno', 'required'],
            ['officeno', 'required'],
            ['simpledesc', 'required'],

            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
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
            $user->lastname = $this->lastname;
            $user->middlename = $this->middlename;
            $user->middleinit = $this->middleinit;

            $user->empcode = $this->empcode;
            $user->department = $this->department;
            $user->position = $this->position;
            $user->hiredate = $this->hiredate;
            $user->specialization = $this->specialization;
            $user->cellno = $this->cellno;
            $user->officeno = $this->officeno;
            $user->simpledesc = $this->simpledesc;

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

    public function attributeLabels()
    {
        return [
            'firstname'=>'First name',
            'lastname'=>'Last name',
            'middlename'=>'Middle name',
            'middleinit'=>'Middle initial',
            'empcode'=>'Code',
            'cellno'=>'Mobile #',
            'officeno'=>'Office #',
            'simpledesc'=>'Description',
        ];
    }
}

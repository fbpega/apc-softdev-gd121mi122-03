<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $firstname
 * @property string $lastname
 * @property string $middlename
 * @property string $middleinit
 * @property string $userimage
 * @property integer $empcode
 * @property string $department
 * @property string $position
 * @property string $hiredate
 * @property string $specialization
 * @property string $cellno
 * @property string $officeno
 * @property string $simpledesc
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at', 'firstname', 'lastname', 'userimage', 'empcode', 'department', 'position', 'hiredate', 'specialization', 'cellno', 'officeno', 'simpledesc'], 'required'],
            [['status', 'created_at', 'updated_at', 'empcode'], 'integer'],
            [['hiredate'], 'safe'],
            [['simpledesc'], 'string'],
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['firstname', 'lastname', 'middlename'], 'string', 'max' => 100],
            [['middleinit'], 'string', 'max' => 1],
            [['userimage'], 'string', 'max' => 200],
            [['department', 'position', 'specialization'], 'string', 'max' => 50],
            [['cellno', 'officeno'], 'string', 'max' => 30],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'middlename' => 'Middlename',
            'middleinit' => 'Middleinit',
            'userimage' => 'Userimage',
            'empcode' => 'Empcode',
            'department' => 'Department',
            'position' => 'Position',
            'hiredate' => 'Hiredate',
            'specialization' => 'Specialization',
            'cellno' => 'Cellno',
            'officeno' => 'Officeno',
            'simpledesc' => 'Simpledesc',
        ];
    }
}

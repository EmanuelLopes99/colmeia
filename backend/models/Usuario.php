<?php

namespace app\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "usuario".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password_hash
 * @property string $password_reset_token
 * @property int $auth_key
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
     public $password;

    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
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
            'email' => 'E-mail',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'auth_key' => 'Auth Key',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function usuario()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}

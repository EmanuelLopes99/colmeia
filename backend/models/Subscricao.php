<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subscricao".
 *
 * @property string $email
 */
class Subscricao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subscricao';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['email'], 'string', 'max' => 200],
            [['email'], 'unique'],
            ['email','email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'email' => 'E-mail',
        ];
    }
}

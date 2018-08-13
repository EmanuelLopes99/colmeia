<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacto".
 *
 * @property int $id
 * @property int $telefone
 * @property string $email
 * @property string $endereco
 * @property string $titulo
 * @property string $descricao
 */
class Contacto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contacto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['telefone', 'email', 'endereco', 'titulo', 'descricao'], 'required'],
            [['telefone'], 'integer'],
            [['descricao'], 'string'],
            [['email'], 'string', 'max' => 100],
            [['endereco'], 'string', 'max' => 150],
            [['titulo'], 'string', 'max' => 200],
            ['email','email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'telefone' => 'Telefone',
            'email' => 'E-mail',
            'endereco' => 'Endereço',
            'titulo' => 'Titulo',
            'descricao' => 'Descrição',
        ];
    }
}

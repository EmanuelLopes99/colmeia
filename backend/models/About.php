<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $titulo
 * @property string $descricao
 * @property string $imagem
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo', 'descricao', 'imagem'], 'required'],
            [['descricao'], 'string'],
            [['titulo'], 'string', 'max' => 200],
            [['imagem'], 'string', 'max' => 255],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'descricao' => 'Descrição',
            'imagem' => 'Image',
        ];
    }
}

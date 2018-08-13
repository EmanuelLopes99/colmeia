<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noticias".
 *
 * @property int $id
 * @property string $titulo
 * @property string $descricao
 * @property string $imageNoticia
 * @property string $nomeAutor
 * @property string $causa
 * @property string $data
 */
class Noticias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'noticias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo', 'descricao', 'imageN', 'nomeAutor', 'causa'], 'required'],
            [['descricao'], 'string'],
            [['data'], 'safe'],
            [['titulo'], 'string', 'max' => 200],
            [['imageN', 'nomeAutor', 'causa'], 'string', 'max' => 255],
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
            'imageN' => 'Image',
            'nomeAutor' => 'Autor',
            'causa' => 'Causa',
            'data' => 'Data',
        ];
    }
}

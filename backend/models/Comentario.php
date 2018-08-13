<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comentario".
 *
 * @property int $id
 * @property string $nome
 * @property string $comentario
 * @property int $radio
 */
class Comentario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comentario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'comentario','id_noticia'], 'required'],
            [['comentario'], 'string'],
            [['nome'], 'string', 'max' => 200],
            [['id_noticia'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'comentario' => 'Comentário',
            'id_noticia' => 'Id Notícia',
        ];
    }
}

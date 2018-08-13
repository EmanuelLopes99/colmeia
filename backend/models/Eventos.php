<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "eventos".
 *
 * @property int $id
 * @property string $titulo
 * @property string $descricao
 * @property string $image
 * @property string $local
 * @property string $data
 */
class Eventos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'eventos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo', 'descricao', 'image', 'local'], 'required'],
            [['descricao'], 'string'],
            [['data'], 'safe'],
            [['titulo', 'image', 'local'], 'string', 'max' => 255],
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
            'image' => 'Image',
            'local' => 'Local',
            'data' => 'Data',
        ];
    }
}

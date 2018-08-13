<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "galeria".
 *
 * @property int $id
 * @property string $titulo
 * @property string $imageG
 * @property string $data
 */
class Galeria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'galeria';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo', 'imageG'], 'required'],
            [['data'], 'safe'],
            [['titulo'], 'string', 'max' => 200],
            [['imageG'], 'string', 'max' => 255],
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
            'imageG' => 'Image',
            'data' => 'Data',
        ];
    }
}

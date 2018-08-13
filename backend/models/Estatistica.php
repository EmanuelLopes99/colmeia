<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estatistica".
 *
 * @property int $id
 * @property string $titulo
 * @property string $images
 */
class Estatistica extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estatistica';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo', 'images'], 'required'],
            [['titulo'], 'string', 'max' => 200],
            [['images'], 'string', 'max' => 255],
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
            'images' => 'Image',
        ];
    }
}

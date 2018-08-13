<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "galeriaimage".
 *
 * @property int $id
 * @property string $galeriaImg
 * @property int $id_galeria
 */
class Galeriaimage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'galeriaimage';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['galeriaImg', 'id_galeria'], 'required'],
            [['id_galeria'], 'integer'],
            [['galeriaImg'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'galeriaImg' => 'Galeria',
            'id_galeria' => 'Id Galeria',
        ];
    }
}

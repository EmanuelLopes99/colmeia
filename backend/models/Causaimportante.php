<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "causaimportante".
 *
 * @property int $id
 * @property string $images
 * @property string $mensage
 */
class Causaimportante extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'causaimportante';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['images', 'mensage'], 'required'],
            [['mensage'], 'string'],
            [['images'], 'string', 'max' => 255],
            [['raised', 'goal'], 'number'],
            ['images', 'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'images' => 'Image',
            'mensage' => 'Menssagem',
            'raised' => 'Raised',
            'goal' => 'Goal',
        ];
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bannerabout".
 *
 * @property int $id
 * @property string $nome
 * @property string $imageA
 */
class Bannerabout extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bannerabout';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'imageA'], 'required'],
            [['nome'], 'string', 'max' => 200],
            [['imageA'], 'string', 'max' => 255],
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
            'imageA' => 'Image',
        ];
    }
}

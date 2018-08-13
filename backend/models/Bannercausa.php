<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bannercausa".
 *
 * @property int $id
 * @property string $nome
 * @property string $imageC
 */
class Bannercausa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bannercausa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'imageC'], 'required'],
            [['nome'], 'string', 'max' => 200],
            [['imageC'], 'string', 'max' => 255],
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
            'imageC' => 'Image',
        ];
    }
}

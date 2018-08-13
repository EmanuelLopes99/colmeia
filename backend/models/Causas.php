<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "causas".
 *
 * @property string $titulo
 * @property string $descricao
 * @property string $imageCausa
 * @property string $dataCausa
 * @property int $id
 * @property int $causaDestaque
 * @property string $raised
 * @property string $goal
 */
class Causas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'causas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo', 'descricao', 'imageCausa', 'raised', 'goal'], 'required'],
            [['descricao'], 'string'],
            [['dataCausa'], 'safe'],
            [['raised', 'goal'], 'number'],
            [['titulo'], 'string', 'max' => 200],
            [['imageCausa'], 'string', 'max' => 255],
            [['causaDestaque'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'titulo' => 'Titulo',
            'descricao' => 'Descrição',
            'imageCausa' => 'Image',
            'dataCausa' => 'Data',
            'id' => 'ID',
            'causaDestaque' => 'Causa Destaque',
            'raised' => 'Raised',
            'goal' => 'Goal',
        ];
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bannergaleria".
 *
 * @property int $id
 * @property string $nome
 * @property string $imageGaleria
 */
class Bannergaleria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bannergaleria';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'imageGaleria'], 'required'],
            [['nome'], 'string', 'max' => 200],
            [['imageGaleria'], 'string', 'max' => 255],
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
            'imageGaleria' => 'Image',
        ];
    }
}

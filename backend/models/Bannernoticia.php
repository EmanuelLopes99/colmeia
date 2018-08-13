<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bannernoticia".
 *
 * @property int $id
 * @property string $nome
 * @property string $imageNoticia
 */
class Bannernoticia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bannernoticia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'imageNoticia'], 'required'],
            [['nome'], 'string', 'max' => 200],
            [['imageNoticia'], 'string', 'max' => 255],
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
            'imageNoticia' => 'Image',
        ];
    }
}

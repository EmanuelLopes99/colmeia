<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bannercontacto".
 *
 * @property int $id
 * @property string $nome
 * @property string $imageContacto
 */
class Bannercontacto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bannercontacto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'imageContacto'], 'required'],
            [['nome'], 'string', 'max' => 200],
            [['imageContacto'], 'string', 'max' => 255],
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
            'imageContacto' => 'Image',
        ];
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "testemunho".
 *
 * @property int $id
 * @property string $nome
 * @property string $funcao
 * @property string $mensage
 * @property string $foto
 */
class Testemunho extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'testemunho';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'funcao', 'mensage', 'foto'], 'required'],
            [['mensage'], 'string'],
            [['nome', 'funcao'], 'string', 'max' => 200],
            [['foto'], 'string', 'max' => 255],
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
            'funcao' => 'Função',
            'mensage' => 'Menssagem',
            'foto' => 'Foto',
        ];
    }
}

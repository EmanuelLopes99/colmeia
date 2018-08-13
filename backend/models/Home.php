<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "home".
 *
 * @property int $id
 * @property string $informacao
 */
class Home extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'home';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['informacao'], 'required'],
            [['informacao'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'informacao' => 'Informação',
        ];
    }
}

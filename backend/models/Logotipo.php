<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "logotipo".
 *
 * @property int $id
 * @property int $logo
 */
class Logotipo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'logotipo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['logo'], 'required'],
            [['logo'], 'string', 'max'=> 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'logo' => 'Logotipo',
        ];
    }
}

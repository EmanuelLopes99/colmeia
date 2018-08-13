<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "homegaleria".
 *
 * @property int $id
 * @property string $imagess
 */
class Homegaleria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'homegaleria';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['imagess'], 'required'],
            [['imagess'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'imagess' => 'Image',
        ];
    }
}

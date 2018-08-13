<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "link".
 *
 * @property string $link
 */
class Link extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'link';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['link'], 'required'],
            [['link'], 'string', 'max' => 200],
            [['link'], 'unique'],
            ['link','url'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'link' => 'Link',
        ];
    }
}

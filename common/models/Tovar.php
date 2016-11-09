<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tovar".
 *
 * @property integer $id
 * @property string $tovar
 * @property string $category
 * @property integer $price
 */
class Tovar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tovar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tovar', 'category', 'price'], 'required'],
            [['price'], 'integer'],
            [['tovar', 'category'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tovar' => 'Tovar',
            'category' => 'Category',
            'price' => 'Price',
        ];
    }
}

<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "geodata".
 *
 * @property integer $id
 * @property integer $type
 * @property double $latitude
 * @property double $longitude
 * @property string $icon
 * @property string $describe
 * @property string $data
 */
class Geodata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'geodata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type'], 'required'],
            [['type'], 'integer'],
            [['latitude', 'longitude'], 'number'],
            [['data'], 'safe'],
            [['describe'], 'string'],
            [['icon'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'icon' => 'Icon',
            'describe' => 'Describe',
            'data' => 'Data',
        ];
    }
}

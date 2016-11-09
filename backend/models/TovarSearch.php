<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Tovar;

/**
 * TovarSearch represents the model behind the search form about `common\models\Tovar`.
 */
class TovarSearch extends Tovar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'price'], 'integer'],
            [['tovar', 'category'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Tovar::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'price' => $this->price,
        ]);

        $query->andFilterWhere(['like', 'tovar', $this->tovar])
            ->andFilterWhere(['like', 'category', $this->category]);

        return $dataProvider;
    }
}

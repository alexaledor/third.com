<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GeodataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Geodatas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="geodata-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Geodata', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'data',
            'type',
            'latitude',
            'longitude',
            'icon',
            'describe',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

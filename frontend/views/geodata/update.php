<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Geodata */

$this->title = 'Update Geodata: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Geodatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="geodata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Geodata */

$this->title = 'Create Geodata';
$this->params['breadcrumbs'][] = ['label' => 'Geodatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="geodata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

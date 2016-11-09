<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model frontend\models\Geodata */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="geodata-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type')->textInput() ?>


    <?= $form->field($model, 'data')
        ->widget(\yii\widgets\MaskedInput::className(),['mask' => 'y.m.d',])
        ->textInput(['placeholder' => $model->getAttributeLabel('Дата')]); ?>



    <?php /* MaskedInput::widget([
        'model' => $model,
        'attribute' => 'data',
        'name' => 'date',
        'mask' => 'd.m.y',
    ]);*/ ?>

    <?= $form->field($model, 'latitude')->textInput()
        ->widget(\yii\widgets\MaskedInput::className(),['mask' => '99.99990',])
        ->textInput(['placeholder' => $model->getAttributeLabel('Широта')]);?>

    <?= $form->field($model, 'longitude')->textInput()
        ->widget(\yii\widgets\MaskedInput::className(),['mask' => '99.99990',])
        ->textInput(['placeholder' => $model->getAttributeLabel('Довгота')]);
    ?>

    <?= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'describe')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

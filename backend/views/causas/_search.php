<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CausasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="causas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'titulo') ?>

    <?= $form->field($model, 'descricao') ?>

    <?= $form->field($model, 'imageCausa') ?>

    <?= $form->field($model, 'dataCausa') ?>

    <?= $form->field($model, 'id') ?>

    <?php // echo $form->field($model, 'causaDestaque') ?>

    <?php // echo $form->field($model, 'raised') ?>

    <?php // echo $form->field($model, 'goal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

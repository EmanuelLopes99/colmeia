<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Causas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="causas-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descricao')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'raised')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'goal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'causaDestaque')->radio() ?>

    <?= $form->field($model, 'imageCausa')->fileInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

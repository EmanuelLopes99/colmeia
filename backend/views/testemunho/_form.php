<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Testemunho */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="testemunho-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'funcao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mensage')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'foto')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

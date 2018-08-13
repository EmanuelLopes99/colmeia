<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Causaimportante */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="causaimportante-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'images')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mensage')->textarea(['rows' => 6]) ?>
    
    <?= $form->field($model, 'raised')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'goal')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Home */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="home-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'informacao')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

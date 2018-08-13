<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Noticias;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Comentario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comentario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput() ?>

    <?= $form->field($model, 'comentario')->textInput() ?>

    <?= $form->field($model, 'id_noticia')->dropDownList(
    	ArrayHelper::map(Noticias::find()->all(), 'id', 'titulo'),
    	['prompt' => '-- Selecione Noticia --']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

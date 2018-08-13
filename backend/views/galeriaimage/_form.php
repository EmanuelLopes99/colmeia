<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Galeria;

/* @var $this yii\web\View */
/* @var $model app\models\Galeriaimage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="galeriaimage-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'galeriaImg')->fileInput() ?>

    <?= $form->field($model, 'id_galeria')->dropDownList(
    	ArrayHelper::map(Galeria::find()->all(),'id','titulo'),
        ['prompt'=>'-- Selecione Titulo --']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

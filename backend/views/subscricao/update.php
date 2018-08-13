<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Subscricao */

$this->title = 'Update Subscricao: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Subscricaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->email, 'url' => ['view', 'id' => $model->email]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="panel panel-default">
    <div class="list-group-item active">
        <h3 class="panel-title">Subscrição</h3>
    </div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div></div>

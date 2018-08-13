<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Link */

$this->title = 'Update Link: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Links', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->link, 'url' => ['view', 'id' => $model->link]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="panel panel-default">
    <div class="list-group-item active">
        <h3 class="panel-title">Link</h3>
    </div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div></div>

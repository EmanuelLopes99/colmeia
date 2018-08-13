<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Galeriaimage */

$this->title = 'Create Galeriaimage';
$this->params['breadcrumbs'][] = ['label' => 'Galeriaimages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="list-group-item active">
        <h3 class="panel-title">Galeria Image</h3>
    </div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div></div>

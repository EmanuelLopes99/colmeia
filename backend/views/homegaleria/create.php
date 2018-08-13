<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Homegaleria */

$this->title = 'Create Home galeria';
$this->params['breadcrumbs'][] = ['label' => 'Home galerias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="list-group-item active">
        <h3 class="panel-title">Home Galeria</h3>
    </div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div></div>

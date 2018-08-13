<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Bannergaleria */

$this->title = 'Create Banner galeria';
$this->params['breadcrumbs'][] = ['label' => 'Banner galerias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="list-group-item active">
        <h3 class="panel-title">Image Galeria</h3>
    </div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div></div>

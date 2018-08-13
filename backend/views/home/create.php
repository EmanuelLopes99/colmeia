<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Home */

$this->title = 'Create Home';
$this->params['breadcrumbs'][] = ['label' => 'Homes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="list-group-item active">
        <h3 class="panel-title">Home</h3>
    </div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div></div>

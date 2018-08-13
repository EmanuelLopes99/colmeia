<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Bannerabout */

$this->title = 'Create Banner about';
$this->params['breadcrumbs'][] = ['label' => 'Banner abouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="list-group-item active">
        <h3 class="panel-title">Image About</h3>
    </div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div></div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Bannerabout */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Banner abouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="list-group-item active">
        <h3 class="panel-title">Image About</h3>
    </div>
        <div class="panel-body">

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eleminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nome',
            [
                'attribute' => 'imageA',
                'value' => Yii::getAlias('@ImgUrl'). '/' .$model->imageA,
                'format' =>['image',['width' => 250, 'height' => 180]],
            ]
        ],
    ]) ?>

</div></div>

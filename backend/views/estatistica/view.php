<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Estatistica */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Estatisticas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="list-group-item active">
        <h3 class="panel-title">Estatistíca</h3>
    </div>
        <div class="panel-body">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'titulo',
            [
                'attribute' => 'dados',
                'value' => Yii::getAlias('@ImgUrl'). '/' .$model->dados,
                'format' =>['image',['width' => 250, 'height' => 180]],
            ]
        ],
    ]) ?>

</div></div>a

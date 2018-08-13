<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CausasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Causas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="list-group-item active">
        <h3 class="panel-title">Causas</h3>
    </div>
        <div class="panel-body">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-ban-circle"></i> Causas', ['create'], ['class' => 'btn btn-primary'])?>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Banner Causa', ['bannercausa/index'], ['class' => 'btn btn-primary'])?>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Causa Importante', ['causaimportante/index'], ['class' => 'btn btn-primary'])?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

             [
                'filter' => false,
                'attribute' => 'imageCausa',
                'format' => 'html',
                'value' => function($model){
                    return Html::img(Yii::getAlias('@ImgUrl'). '/' .$model->imageCausa,
                    ['width' => 70, 'height' => 55]);
                },
            ],
            'titulo',
            'descricao:ntext',
            //'dataCausa',
            //'id',
            //'causaDestaque',
            'raised',
            'goal',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div></div>

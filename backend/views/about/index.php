<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AboutSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Abouts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="list-group-item active">
        <h3 class="panel-title">About</h3>
    </div>
        <div class="panel-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> About', ['create'], ['class' => 'btn btn-primary'])?>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Banner About', ['bannerabout/index'], ['class' => 'btn btn-primary'])?>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Estatisticas', ['estatistica/index'], ['class' => 'btn btn-primary'])?>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Testemunhos', ['testemunho/index'], ['class' => 'btn btn-primary'])?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'filter' => false,
                'attribute' => 'image',
                'format' => 'html',
                'value' => function($model){
                    return Html::img(Yii::getAlias('@ImgUrl'). '/' .$model->image,
                    ['width' => 70, 'height' => 55]);
                },
            ],
            'titulo',
            [
                'attribute' => 'descrecao',
                'filter' => false,
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div></div>

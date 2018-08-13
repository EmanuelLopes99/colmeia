<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TestemunhoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Testemunhos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="list-group-item active">
        <h3 class="panel-title">Testemunho</h3>
    </div>
        <div class="panel-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Testemunhos', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'filter' => false,
                'attribute' => 'foto',
                'format' => 'html',
                'value' => function($model){
                    return Html::img(Yii::getAlias('@ImgUrl'). '/' .$model->foto,
                    ['width' => 70, 'height' => 55]);
                },
            ],
             'nome',
            'funcao',
            'mensage:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div></div>

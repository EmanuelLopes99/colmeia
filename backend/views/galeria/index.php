<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GaleriaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Galerias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="list-group-item active">
        <h3 class="panel-title">Galeria</h3>
    </div>
        <div class="panel-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-picture"></i> Galerias', ['create'], ['class' => 'btn btn-primary'])?> 
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Banner Galeria', ['bannergaleria/index'], ['class' => 'btn btn-primary'])?>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Galeria Image', ['galeriaimage/index'], ['class' => 'btn btn-primary'])?> 
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
             [
                'filter' => false,
                'attribute' => 'imageG',
                'format' => 'html',
                'value' => function($model){
                    return Html::img(Yii::getAlias('@ImgUrl'). '/' .$model->imageG,
                    ['width' => 70, 'height' => 55]);
                },
            ],
            'titulo',
            //'data',


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div></div>

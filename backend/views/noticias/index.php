<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NoticiasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Noticias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="list-group-item active">
        <h3 class="panel-title">Notícias</h3>
    </div>
        <div class="panel-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Notícias', ['create'], ['class' => 'btn btn-primary'])?> 
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Banner Notícia', ['bannernoticia/index'], ['class' => 'btn btn-primary'])?>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Posts', ['post/index'], ['class' => 'btn btn-primary'])?> 
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Eventos', ['eventos/index'], ['class' => 'btn btn-primary'])?> 
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'filter' => false,
                'attribute' => 'imageN',
                'format' => 'html',
                'value' => function($model){
                    return Html::img(Yii::getAlias('@ImgUrl'). '/' .$model->imageN,
                    ['width' => 70, 'height' => 55]);
                },
            ],
            'nomeAutor',
            'titulo',
            'descricao:ntext',
            'causa',
            //'data',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div></div>

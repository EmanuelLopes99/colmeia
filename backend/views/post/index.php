<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="list-group-item active">
        <h3 class="panel-title">Posts</h3>
    </div>
        <div class="panel-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-pencil"></i> Posts', ['create'], ['class' => 'btn btn-primary'])?> 
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'filter' => false,
                'attribute' => 'post',
                'format' => 'html',
                'value' => function($model){
                    return Html::img(Yii::getAlias('@ImgUrl'). '/' .$model->post,
                    ['width' => 70, 'height' => 55]);
                },
            ],
            'titulo',
            //'data',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div></div>

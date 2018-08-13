<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HomeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Homes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="list-group-item active">
        <h3 class="panel-title">Home</h3>
    </div>
        <div class="panel-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-home"></i> Home', ['create'], ['class' => 'btn btn-primary'])?>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Home Galeria', ['homegaleria/index'], ['class' => 'btn btn-primary'])?>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Logotipo', ['logotipo/index'], ['class' => 'btn btn-primary'])?>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Links', ['link/index'], ['class' => 'btn btn-primary'])?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'informacao:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div></div>

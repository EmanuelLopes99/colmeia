<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ContactoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contactos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="list-group-item active">
        <h3 class="panel-title">Contactos</h3>
    </div>
        <div class="panel-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
         <?= Html::a('<i class="glyphicon glyphicon-earphone"></i> Contacto', ['create'], ['class' => 'btn btn-primary'])?>
         <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Banner Contacto', ['bannercontacto/index'], ['class' => 'btn btn-primary'])?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'telefone',
            'email:email',
            'endereco',
            'titulo',
            //'descricao:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div></div>

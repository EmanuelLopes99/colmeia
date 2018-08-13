<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Colmeia',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <!--Cabecalho da pagina-->
    <header id="header" style="background-color: #000;">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
             <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Gerencie seu site</small> </h1>
          </div>

          <!--Criar button Post-->
          <div class="col-md-2">
            <div class="dropdown create">
                <button class="btn btn-default" type="button" data-toggle="dropdown">Criar Conteudo
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="index.php?r=causas/index">Causas</a></li>
                  <li><a href="index.php?r=eventos/index">Eventos</a></li>
                  <li><a href="index.php?r=testemunho/index">Testemunhos</a></li>
                  <li><a href="index.php?r=post/index">Post</a></li>
                </ul>
            </div>
        </div>
        </div>
        </div>
    </header>
    <!-- Fim de header -->

    <!--Mostar onde estamos links-->
     <section id="breadcrumb">
        <div class="container">          
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </div>
    </section>

    <!--Corpo do site-->
    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
              <div class="list-group">
                <a href="index.php" class="list-group-item active ">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
                </a>
                <a href="index.php?r=home/index" class="list-group-item"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                   Home <span class="badge"></span>
                 </a>
                 <a href="index.php?r=about/index" class="list-group-item"><span class="glyphicon glyphicon-tint" aria-hidden="true"></span>
                   About <span class="badge"></span>
                 </a>
                 <a href="index.php?r=causas/index" class="list-group-item"><span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span>
                   Causas <span class="badge"></span>
                 </a>
                <a class="list-group-item" href="index.php?r=galeria/index"><i class="glyphicon glyphicon-picture"  are-hidden="true"></i> 
                   Galerias 
                </a>
                 <a href="index.php?r=noticias/index" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                   Notícias <span class="badge"></span>
                 </a>
                 <a href="index.php?r=contacto/index" class="list-group-item"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                   Contacto <span class="badge"></span>
                 </a>
                 <a href="index.php?r=subscricao/index" class="list-group-item"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                   Subscrição <span class="badge"></span>
                 </a>
                 <a href="index.php?r=comentario/index" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                   Comentarios <span class="badge"></span>
                 </a>
                  <a href="index.php?r=usuario/index" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                   Usuarios <span class="badge"></span>
                 </a>
              </div>
              
              <div class="well">
                <h4>Posts Visitados</h4>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                    20%
                  </div>
                </div>
                <h4 class="tooltip">Comentarios</h4>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    60%
                  </div>
                </div>
              </div>
          </div>

          <!-- botao voltar par cima -->
          <div class="btn-voltar jbtn-voltar">
            <a class="btn-voltar-link jbtn-voltar-link" href=""><i class="icon icon-angle-up"></i></a>
          </div>

          <div class="col-lg-9">
             <?= $content ?>
           </div>
        </div>
      </div>
    </section>
</div><!-- fim de warp -->

<footer class="footer">
    <div class="container">
        <p class="m-0 text-white"><a href="index.php"> Police Privacy </a> copyright &copy; EME MARKETING <?= date ('Y') ?><a href="index.php"> Use Terms </a></p>
        <span>Made by <a href="http://innovatmedia.com">imedia</a> </span>
    </div>
</footer> 

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>




<!-- URL::to(Yii::$app->params['post'].$post['anexo'] -->
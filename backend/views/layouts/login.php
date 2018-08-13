<?php

/* @var $this \yii\web\View */
/* @var $content string */
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

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
<body >
<?php $this->beginBody() ?>

<div class="wrap">
    

    <div class="container" style="margin-top: 120px">
        <div class="col-md-offset-4 col-md-4">
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>
</div>

<!-- <footer class="footer">
    <div class="container">
        <p class="m-0 text-white">Copyright &copy; Imedia <?= date ('Y') ?> </p>
        <span>Desenvolvido por <a href="http://innovatmedia.com">imedia</a> </span>
    </div>
</footer> -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>

<!--    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">-->

    <script src="<?=Yii::$app->homeUrl?>theme/js/vendor/modernizr-2.6.2.min.js"></script>

    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header id="navigation" class="navbar-fixed-top" >
    <div class="container">

        <div class="navbar-header" ">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- /responsive nav button -->

            <!-- logo -->
            <h1 class="navbar-brand">
                <a href="#body">
                    <!-- <img src="<?=Yii::$app->homeUrl?>theme/img/logo.png" alt="Kasper Logo"> -->
                </a>
            </h1>
            <!-- /logo -->

        </div>

        <!-- main nav -->
        <nav class="collapse navigation navbar-collapse navbar-right" role="navigation" >
            <ul id="nav" class="nav navbar-nav">
                <li class="current"><a href="#home-carousel">Bosh sahifa</a></li>
                <li><a href="#subscribe">Tekshirish</a></li>
                <li><a href="#service">Xizmatlar</a></li>
                <li><a href="#about">Biz haqimizda</a></li>
                <li><a href="#pricing">Narxlar</a></li>
                <li><a href="#contact">Ariza jo'natish</a></li>
            </ul>
        </nav>
        <!-- /main nav -->
    </div>
</header>
<!--
End Fixed Navigation
==================================== -->

<?=$content?>

<!--
JavaScripts
========================== -->

<!-- main jQuery -->
<script src="<?=Yii::$app->homeUrl?>theme/js/vendor/jquery-1.11.1.min.js"></script>
<!-- Bootstrap -->
<script src="<?=Yii::$app->homeUrl?>theme/js/bootstrap.min.js"></script>
<!-- jquery.nav -->
<script src="<?=Yii::$app->homeUrl?>theme/js/jquery.nav.js"></script>
<!-- Portfolio Filtering -->
<script src="<?=Yii::$app->homeUrl?>theme/js/jquery.mixitup.min.js"></script>
<!-- Fancybox -->
<script src="<?=Yii::$app->homeUrl?>theme/js/jquery.fancybox.pack.js"></script>
<!-- Parallax sections -->
<script src="<?=Yii::$app->homeUrl?>theme/js/jquery.parallax-1.1.3.js"></script>
<!-- jQuery Appear -->
<script src="<?=Yii::$app->homeUrl?>theme/js/jquery.appear.js"></script>
<!-- countTo -->
<script src="<?=Yii::$app->homeUrl?>theme/js/jquery-countTo.js"></script>
<!-- owl carousel -->
<script src="<?=Yii::$app->homeUrl?>theme/js/owl.carousel.min.js"></script>
<!-- WOW script -->
<script src="<?=Yii::$app->homeUrl?>theme/js/wow.min.js"></script>
<!-- theme custom scripts -->
<script src="<?=Yii::$app->homeUrl?>theme/js/main.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

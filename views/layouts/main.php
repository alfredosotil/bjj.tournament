<?php

use app\assets\AppAsset;
use app\components\CustomNav as Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\widgets\Menu;
use yii2mod\notify\BootstrapNotify;
use app\widgets\ViewAlertWidget;
use app\widgets\LoginFormWidget;
use app\widgets\PasswordResetRequestFormWidget;
use app\widgets\SignupFormWidget;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language; ?>">
    <head>
        <?php $this->registerMetaTag(['charset' => Yii::$app->charset]); ?>
        <?php $this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1']); ?>
        <?php echo Html::csrfMetaTags(); ?>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <title><?php echo implode(' | ', array_filter([Html::encode($this->title), Yii::$app->name])); ?></title>
        <?php $this->head() ?>
    </head>
    <body class="">
        <?php $this->beginBody() ?>
        <?= (Yii::$app->user->isGuest ? LoginFormWidget::widget([]) : ''); ?>
        <?= (Yii::$app->user->isGuest ? PasswordResetRequestFormWidget::widget([]) : ''); ?>
        <?= (Yii::$app->user->isGuest ? SignupFormWidget::widget([]) : ''); ?>
        <?= ViewAlertWidget::widget([]); ?>
        <div id="wrapper">
            <!-- preloader -->
            <div id="preloader">
                <div id="spinner">
                    <img src="/images/preloaders/1.gif" alt="">
                </div>
                <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
            </div>

            <!-- Header -->
            <header id="header" class="header">
                <div class="header-top sm-text-center bg-theme-colored">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <nav>
<!--                                    <ul class="list-inline sm-text-center text-left flip mt-5">
                                        <li> 
                                            <a class="text-white" href="#">Iniciar</a> 
                                            <?php if (Yii::$app->user->isGuest): ?>
                                                <a id="signin-form-button" class="text-white" href="#" data-toggle="modal" data-target="#login-form"><i class="icon-user"></i>Iniciar</a>
                                            <?php else: ?>
                                                <a class="text-white" href="/site/logout" data-confirm="Are you sure you want to sign out?" data-method="post">Salir</a>
                                            <?php endif; ?>
                                        </li>
                                        <li class="text-white">|</li>
                                                                                <li> <a class="text-white" href="#"></a> </li>
                                                                                <li class="text-white">|</li>
                                        <li> <a class="text-white" href="#">Soporte</a> </li>
                                    </ul>-->
                                    <?php
                                    $items = [
                                        [
                                            'label' => '<i class="icon-user"></i>' . Yii::t('yii2mod.user', 'Iniciar Sesión'),
                                            'url' => '#',
                                            'linkOptions' => [
                                                'id' => 'signin-form-button',
                                                'class' => 'text-white',
                                                'data' => [
                                                    'toggle' => 'modal',
                                                    'target' => '#login-form',
                                                ]
                                            ],
                                            'visible' => Yii::$app->user->isGuest
                                        ],
                                        [
                                            'label' => Yii::t('app', 'Opciones'),
                                            'linkOptions' => ['class' => 'c-link'],
                                            'options' => ['class' => 'text-white'],
                                            'dropDownOptions' =>
                                            [
                                                'class' => 'c-menu-type-classic c-pull-left',
                                                'style' => 'min-width: auto;'
                                            ],
                                            'items' => [
                                                [
                                                    'label' => Yii::t('yii2mod.user', 'Mi cuenta'),
                                                    'url' => ['site/account'],
                                                ],
                                                [
                                                    'label' => Yii::t('yii2mod.user', 'Administración'),
                                                    'url' => ['admin/'],
                                                    'visible' => Yii::$app->getUser()->can('admin'),
                                                ],
                                            ],
                                            'visible' => !Yii::$app->user->isGuest
                                        ],
                                        [
                                            'label' => Yii::t('yii2mod.user', 'Salir'),
                                            'url' => ['site/logout'],
                                            'linkOptions' => [
                                                'class' => 'text-white',
                                                'data' => [
                                                    'confirm' => Yii::t('yii2mod.user', 'Estas seguro que quieres salir?'),
                                                    'method' => 'post',
                                                ]],
                                            'visible' => !Yii::$app->user->isGuest
                                        ],
                                    ];
                                    echo Nav::widget([
                                        'options' => ['class' => 'list-inline sm-text-center text-left flip mt-5'],
                                        'items' => $items,
                                        'encodeLabels' => false,
                                    ]);
                                    ?>
                                </nav>
                            </div>
                            <div class="col-md-6">
                                <div class="widget m-0 mt-5 no-border">
                                    <ul class="list-inline text-right sm-text-center">
                                        <li class="pl-10 pr-10 mb-0 pb-0">
                                            <div class="header-widget text-white"><i class="fa fa-phone"></i> 123-456-789 </div>
                                        </li>
                                        <li class="pl-10 pr-10 mb-0 pb-0">
                                            <div class="header-widget text-white"><i class="fa fa-envelope-o"></i> contacto@tbjjp.com </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2 text-right flip sm-text-center">
                                <div class="widget m-0">
                                    <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm">
                                        <li class="mb-0 pb-0"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="mb-0 pb-0"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="mb-0 pb-0"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li class="mb-0 pb-0"><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-nav">
                    <div class="header-nav-wrapper bg-light navbar-scrolltofixed">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="menuzord-right" class="menuzord orange no-bg"> <a class="menuzord-brand stylish-header pull-left flip" href="javascript:void(0)"><img src="/images/logo-wide-main.png" alt=""></a>
                                        <ul class="menuzord-menu onepage-nav">
                                            <li class="active"><a href="#home">Inicio</a></li>
                                            <li><a href="#about">TBJJP</a></li>
                                            <li><a href="#services">Eventos</a></li>
                                            <li><a href="#trainer">Arbitros</a></li>
                                            <li><a href="#pricing">Inscripciones</a></li>
                                            <!--<li><a href="#blog">Blog</a></li>-->
                                            <li><a href="#contact">Contacto</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <?php echo $content ?>
            <!-- Footer -->
            <footer class="footer divider layer-overlay overlay-dark" data-bg-img="/images/bg/bg6.jpg">
                <div class="container pt-100 pb-30">
                    <div class="row mb-50">
                        <div class="col-sm-4 col-md-4 mb-sm-60">
                            <div class="contact-icon-box p-30">
                                <div class="contact-icon bg-theme-colored"> <i class="fa fa-map-marker text-white font-22"></i> </div>
                                <h4 class="text-uppercase text-white">Address</h4>
                                <p class="font-16">09 Movers and Packers,Design Street,Victoria,Australia</p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 mb-sm-60">
                            <div class="contact-icon-box p-30">
                                <div class="contact-icon bg-theme-colored"> <i class="fa fa-envelope-o text-white font-22"></i> </div>
                                <h4 class="text-uppercase text-white">mail us</h4>
                                <p class="font-16">Get support via <br>
                                    <a class="" href="mailto:mail@kodesolution.com" target="_top">email : mail@kodesolution.com </a> </p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="contact-icon-box p-30">
                                <div class="contact-icon bg-theme-colored"> <i class="fa fa-phone text-white font-22"></i> </div>
                                <h4 class="text-uppercase text-white">PHONE / FAX</h4>
                                <p class="font-16">+1 123 456 789 <br>
                                    +1 123 456 789</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="widget dark"> <img class="mt-10 mb-20" alt="" src="/images/logo-wide-white.png">
                                <p class="font-12">Corporis dolor soluta officiis quam, repudiandae, culpa nostrum maiores dignissimos quod expedita, aliquid magnam tempore iste minima quaerat adipisci veniam.</p>
                                <ul class="styled-icons icon-bordered small square list-inline mt-10">
                                    <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype text-white"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube text-white"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="widget dark">
                                <h5 class="widget-title line-bottom">Pages</h5>
                                <ul class="list angle-double-right list-border">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Volunteers</a></li>
                                    <li><a href="#">Causes</a></li>
                                    <li><a href="#">Events</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="widget dark">
                                <h5 class="widget-title line-bottom">Quick Links</h5>
                                <ul class="list angle-double-right list-border">
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Donor Privacy Policy</a></li>
                                    <li><a href="#">Disclaimer</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Copyright Notice</a></li>
                                    <li><a href="#">Media Center</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="widget dark">
                                <h5 class="widget-title line-bottom">Opening Hours</h5>
                                <ul class="opening-hours list-border">
                                    <li><p><span class="text-white">Monday To Friday:</span> <br>
                                            9:00 am to 9:00 pm</p>
                                    </li>
                                    <li><p><span class="text-white">Monday To Friday:</span> <br>
                                            9:00 am to 9:00 pm</p>
                                    </li>
                                    <li><p><span class="text-white">Monday To Friday:</span> <br>
                                            9:00 am to 9:00 pm</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid copy-right p-20">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <p class="font-11 text-white m-0">Copyright &copy;2015 ThemeMascot. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </footer>
            <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a> 
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
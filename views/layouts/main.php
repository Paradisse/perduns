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
    <?php $this->registerJsFile(
        '@web/js/scroll.js',
        ['depends' => [\yii\web\JqueryAsset::className()]]); ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="app">
    <div class="hs">

        <div class="item">
            <div class="item2">
                <div class="bar_cont">
                    <div class="bar_rating"></div>
                    <div class="grey-text">КЛИЕНТЫ</div>
                </div>
                <div class="bar_cont">
                    <div class="bar_rating"></div>
                    <div class="grey-text">ПРОСМОТРЫ</div>
                </div>
                <div class="bar_cont">
                    <div class="bar_rating"></div>
                    <div class="grey-text">ПОКАЗЫ</div>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="wrapper">
                <div class="top-header">
                    <p class="header-text">ТВОЙ ПРОЕКТ ПОДДЕРЖАТ</p>
                    <p class="perduns">ПЕРДУНЫ</p>
                </div>
                <div class="bottom-header">

                    <div class="redblock"></div>

                    <div class="big-greyblock">
                        <p class="block-text">версия под смартфоны <span class="caps">БЕСПЛАТНО</span></p>
                    </div>

                    <div class="big-greysquare">
                        <p class="block-text">мы очень хотим<br>сделать из вас нашего<br><span class="caps">постоянного</span><br>
                            клиента :)</p>
                    </div>

                    <div class="greyblock"></div>
                    <div class="big-redblock"></div>

                    <div class="greyblock">
                        <p class="block-text">под любой бюджет</p>
                    </div>
                    <div class="greyblock"></div>
                    <div class="greyblock"></div>

                    <div class="big-greyblock-1">
                        <p class="block-text">масштабираем сервер<br>по росту нагрузок</p>
                    </div>

                    <div class="fat-redblock">
                        <p class="block-text">будут естественные доп. расходы<br>сугубо по рекламе или оборудованию<br>все
                            обсудим при заказе</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="item">
            <div class="item2">
                <div class="bar_cont">
                    <div class="bar_rating"></div>
                    <div class="grey-text">УДОБСТВО</div>
                </div>
                <div class="bar_cont">
                    <div class="bar_rating"></div>
                    <div class="grey-text">ЭКОНОМИЯ</div>
                </div>
                <div class="bar_cont">
                    <div class="bar_rating"></div>
                    <div class="grey-text">ПОТЕНЦИАЛ</div>
                </div>
            </div>
        </div>

    </div>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

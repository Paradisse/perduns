<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\web\View;

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
    <?php $this->registerJsFile('https://vk.com/js/api/openapi.js?168'); ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <div class="page-wrap">

            <div class="items">
                <div class="item">

                    <div class="item_bars">
                        <div class="bar_cont">
                            <div class="bar30"></div>
                            <div class="grey-text">КЛИЕНТЫ</div>
                        </div>
                        <div class="bar_cont">
                            <div class="bar60"></div>
                            <div class="grey-text">ПРОСМОТРЫ</div>
                        </div>
                        <div class="bar_cont">
                            <div class="bar80"></div>
                            <div class="grey-text">ПОКАЗЫ</div>
                        </div>
                    </div>

                    <div class="item-options">
                        <div class="option">
                            <p class="opt-text">ЛЕНДИНГ (таргет. страница)</p>
                        </div>
                        <div class="option">
                            <p class="opt-text">САЙТ-ВИЗИТКА под рекламу</p>
                        </div>
                        <div class="option">
                            <p class="opt-text">ИНТЕРНЕТ-МАГАЗИН (торг. п.)</p>
                        </div>
                        <div class="option">
                            <p class="opt-text">ЧАТ-БОТ или ПАРСЕР</p>
                        </div>
                        <div class="option">
                            <p class="opt-text">ПРИЛОЖЕНИЯ и ИГРЫ</p>
                        </div>
                        <div class="option">
                            <p class="opt-text">ИНДИВИДУАЛЬНЫЙ ПРОЕКТ</p>
                        </div>
                    </div>

                </div>

                <div class="item-centered" id="middle">
                    <div class="wrapper">
                        <div class="top-header">
                            <p class="header-text">ТВОЙ ПРОЕКТ ПОДДЕРЖАТ</p>
                            <p class="perduns">ПЕРДУНЫ</p>
                        </div>
                        <div class="bottom">

                            <div class="redblock"></div>

                            <div class="big-greyblock">
                                <p class="block-text">версия под смартфоны <span class="caps">БЕСПЛАТНО</span></p>
                            </div>

                            <div class="tallblock"></div>
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

                            <p class="green-text">
                                от <span style="font-size: 2em">15000</span>
                                <span style="vertical-align: 40px; font-size: 0.9em">РУБЛЕЙ</span>
                                <span class="greyt">есть рассрочка (0%)</span>
                                <span class="greyt1">оплата после результата</span>
                            </p>

                        </div>

                    </div>

                </div>


                <div class="item">

                    <div class="item_bars">
                        <div class="bar_cont">
                            <div class="bar"></div>
                            <div class="grey-text">УДОБСТВО</div>
                        </div>
                        <div class="bar_cont">
                            <div class="bar75"></div>
                            <div class="grey-text">ЭКОНОМИЯ</div>
                        </div>
                        <div class="bar_cont">
                            <div class="bar40"></div>
                            <div class="grey-text">ПОТЕНЦИАЛ</div>
                        </div>
                    </div>

                    <div class="item-options">
                        <div class="option">
                            <p class="opt-text">ПРОДВИЖЕНИЕ САЙТА</p>
                        </div>
                        <div class="option">
                            <p class="opt-text">АДМИН-ПАНЕЛЬ</p>
                        </div>
                        <div class="option">
                            <p class="opt-text">СБОРКА СТАТИСТИКИ</p>
                        </div>
                        <div class="option">
                            <p class="opt-text">ПОДКЛЮЧЕНИЕ CMS</p>
                        </div>
                        <div class="option">
                            <p class="opt-text">РЕКЛАМА ПО РЕГИОНУ</p>
                        </div>
                        <div class="option">
                            <p class="opt-text">РАСКРУТКА СОЦСЕТЕЙ</p>
                        </div>
                    </div>

                </div>

            </div>


        <div class="furgal">

            <div class="triangle">
                <div class="smart">МЫ РЕАЛЬНО УМНЫЕ</div>
            </div>
            <div class="trap">
                <div id="vk_groups"></div>
                <?php $this->registerJs('VK.Widgets.Group("vk_groups", {mode: 4, no_cover: 1, width: 600, height: "600"}, 199077272)'); View::POS_READY; ?>
            </div>
            <div class="triangle1"></div>
        </div>

    </div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

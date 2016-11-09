<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\Modal;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <style>
        .mylink {

        }

    </style>
    <body>
    <?php $this->beginBody() ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" style="text-align: center">
                <h1>third.com - advanced</h1>
            </div>
        </div>
    </div>


    <div class="wrap" style="height: 80%">
        <?php
        Modal::begin(['id' => 'modal',
            'header' => '<h2>Hello world</h2>']);

        echo "Say Hello...";

        Modal::end();
        ?>


        <?php
        NavBar::begin([
            'brandLabel' => '',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top5',
            ],
        ]);

        /*echo Html::button('Маркери', [
            'id' => 'accordionmarker-button',
            'class' => 'btn btn-danger',
            'style'=>'margin-top:7px; margin-right: 5px;',
            'onclick' => 'showAccordion(\'marker\')'
        ]);*/

        /*echo Html::button('Полигони', [
            'class' => 'btn btn-success',
            'style'=>'margin-top:7px;',
            'onclick' => 'showAccordion(\'polygon\')'
        ]);*/

        $menuItems = [
            ['label' => 'Home', 'url' => ['/site/index']]
        ];
        $menuItems[] = ['label' => 'Розділи',
            'items' => [
                '<li id="accordionmarker-button"><a onclick="showAccordion(\'marker\')" style="cursor: pointer">Розділ маркери</a></li>',
                '<li id="accordionpolygon-button"><a onclick="showAccordion(\'polygon\')" style="cursor: pointer">Розділ полигони</a></li>',
                ['label' => 'Модальное окно', 'url' => ['/site/showmodal']],
            ]
        ];

        ?>

        <?php

        $menuItems[] = ['label' => 'Меню', 'url' => ['/site/menu']];
        $menuItems[] = ['label' => 'GeoData', 'url' => ['/geodata']];
        $menuItems[] = ['label' => 'About', 'url' => ['/site/about']];
        $menuItems[] = ['label' => 'Contact', 'url' => ['/site/contact']];

        if (Yii::$app->user->isGuest) {
            $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
            $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
        } else {
            $menuItems[] = '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>';
        }

        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right6'],
            'items' => $menuItems,
        ]);
        NavBar::end();
        ?>

        <div class="container" style="padding-top: 1px; padding-bottom: 1px; width: 100%">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>

    <!--<footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; My Company <?/*= date('Y') */?></p>

        <p class="pull-right"><?/*= Yii::powered() */?></p>
    </div>
</footer>-->

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>
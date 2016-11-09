<?php

namespace app\assets;

use yii\web\AssetBundle;

class AboutClassAsset extends AssetBundle
{
    public $basePath = '@webroot'; //алиас каталога с файлами, который соответствует @web
    public $baseUrl = '@web';//Алиас пути к файлам

    public $css = [

    ];

    public $js = [

        'js/photo/',

    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
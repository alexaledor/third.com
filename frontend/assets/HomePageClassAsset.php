<?php

namespace app\assets;

use yii\web\AssetBundle;


class HomePageClassAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';


    public $css = [
        'css/draw/leaflet.css',
        'css/font-awesome.css',
        'css/draw/leaflet.draw.css',

        'css/checkbox.css',
        'fons/',
        'markers/',
        'css/mycluster.css',
        'css/MarkerCluster.css',
        'css/MarkerCluster.Default.css',


    ];

    public $js = [

        'js/draw/leaflet-src072.js',
        'js/leaflet.markercluster-src_2013.js',

        'js/draw/src/Leaflet.draw.js',

        'js/draw/src/Toolbar.js',
        'js/draw/src/Tooltip.js',

        'js/draw/src/ext/GeometryUtil.js',
        'js/draw/src/ext/LatLngUtil.js',
        'js/draw/src/ext/LineUtil.Intersect.js',
        'js/draw/src/ext/Polygon.Intersect.js',
        'js/draw/src/ext/Polyline.Intersect.js',

        'js/draw/src/draw/DrawToolbar.js',
        'js/draw/src/draw/handler/Draw.Feature.js',
        'js/draw/src/draw/handler/Draw.SimpleShape.js',
        'js/draw/src/draw/handler/Draw.Polyline.js',
        'js/draw/src/draw/handler/Draw.Circle.js',
        'js/draw/src/draw/handler/Draw.Marker.js',
        'js/draw/src/draw/handler/Draw.Polygon.js',
        'js/draw/src/draw/handler/Draw.Rectangle.js',

        'js/draw/src/edit/EditToolbar.js',
        'js/draw/src/edit/handler/EditToolbar.Edit.js',
        'js/draw/src/edit/handler/EditToolbar.Delete.js',

        'js/draw/src/Control.Draw.js',

        'js/draw/src/edit/handler/Edit.Poly.js',
        'js/draw/src/edit/handler/Edit.SimpleShape.js',
        'js/draw/src/edit/handler/Edit.Circle.js',
        'js/draw/src/edit/handler/Edit.Rectangle.js',
        'js/draw/src/edit/handler/Edit.Marker.js',

        'js/leaflet-start.js', //инициализация карты
        'js/draw/draw-start.js', //инициализация рисовалки

        'js/interfaceControl/directMenu.js', //Управление елементами меню
        'js/interfaceControl/dynamicPage.js', //Динамическое изменение размеров окна

        'js/markers-script.js', //отрисовка маркеров и полигонов

    ];


    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
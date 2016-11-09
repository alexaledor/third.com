<?php
namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\AccordionPartition;

//use app\assets\HtmlControllerAsset;
//HtmlControllerAsset::register($this);



class HtmlController extends Controller
{
    public function actionAccordion($type){
        $data = '';
        if ($type == 'marker'){
            $data = AccordionPartition::AccordionMarker();
        }
        if ($type == 'polygon'){
            $data = AccordionPartition::AccordionPolygon();
        }
        echo $data;
    }


}
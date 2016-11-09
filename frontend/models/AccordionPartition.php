<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class AccordionPartition extends Model
{

    public function AccordionMarker(){
        $data = '
        <div id="accordionmarker" class="panel panel-default">
            <button class="close closeX" type="button" style="margin-right: 5px; color: #000000">&times;</button>
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                        Маркеры</a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body">
                    <div class="checkbox">
                        <label style="font-size: 1.5em">
                            <img id="rrr" src="/markers/apple.png">
                            <input id="11" class="checkboxClick" type="checkbox" value="">
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span style="font-size: 16px;">Яблучко</span>
                        </label>
                    </div>

                    <div class="checkbox">
                        <label style="font-size: 1.5em">
                            <img src="/markers/snowy-2.png">
                            <input id="12" class="checkboxClick" type="checkbox" value="">
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span style="font-size: 16px;">Снежок</span>
                        </label>
                    </div>

                    <div class="checkbox">
                        <label style="font-size: 1.5em">
                            <img src="/markers/alligator.png">
                            <input id="13" class="checkboxClick" type="checkbox" value="">
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <span style="font-size: 16px;">Крокодайл</span>
                        </label>
                    </div>

                    <button class="btn btn-info" onclick="selectAll();">Вибрати все</button>
                    <button class="btn btn-default" onclick="clearMap();">Скасувати</button>
                    <!--<button class="btn btn-danger" onclick="ajaxTest(1);">Ajax test</button>-->

                </div>
            </div>
        </div>';
        return $data;
    }

    public function AccordionPolygon(){
        return $data = '
        <div id="accordionpolygon" class="panel panel-default">
            <button class="close closeX" type="button" style="margin-right: 5px; color: #000000">&times;</button>
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                        Полигоны</a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">

                <div class="checkbox">
                    <label style="font-size: 1.5em">
                        <input id="21" class="checkboxClick" type="checkbox" value="">
                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        <span style="font-size: 16px;">Коло</span>
                    </label>
                </div>

                <div class="checkbox">
                    <label style="font-size: 1.5em">
                        <input id="22" class="checkboxClick" type="checkbox" value="">
                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        <span style="font-size: 16px;">Трикутник</span>
                    </label>
                </div>

                <div class="checkbox">
                    <label style="font-size: 1.5em">
                        <input id="23" class="checkboxClick" type="checkbox" value="">
                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        <span style="font-size: 16px;">Пусто. Нічого нема!</span>
                    </label>
                </div>

            </div>
        </div>';
    }




}
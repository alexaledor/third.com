<?php

use yii\helpers\Html;
use yii\web\UrlManager;

use thiagoalessio\TesseractOCR\TesseractOCR;

//$file = dirname(__FILE__).'\222.jpg';


//echo $file.'<br>';

/*$res = (new TesseractOCR($file))
    ->lang('eng')
    ->run();

echo '<h3>'.$res.'</h3>';*/


//echo (new TesseractOCR('text.png')) ->run();


?>

    <h1>Hello, this is my testpage</h1>

    <button class="btn btn-info"><i class="fa fa-cogs"></i></button>
<?= Html::a('SiteLink', 'http://i.ua', ['class' => 'btn btn-danger']) ?>
    <br>
<?= \yii\helpers\Url::to(); ?>
    <br>
    <code><?= __FILE__ ?></code>
    <br>
    <code><?= __DIR__ ?></code>

<?php

$file = dirname(__FILE__) . '\test.csv';

$array_csv = array_map('str_getcsv', file($file));

echo '<pre>';
//var_dump($array_csv);

//echo count($array_csv);

$res_array = [];

foreach ($array_csv as $str) {

    //var_dump($str[0]);

    $array_row = trim($str[0], ';');

    array_push($res_array, $array_row);

}

var_dump($res_array);

//exit;
$num = count($res_array);

for ($i = 1; $i < $num; $i++) {




    if ($res_array[$i-1][4] == $res_array[$i][4]) {
        echo $res_array[$i][0];
    }

}


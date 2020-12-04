<?php
die();
/*
$start = (float)array_sum(explode(' ', microtime()));
*/


use yii\helpers\ArrayHelper;
use yii\web\Application;

const App = 'sert';
const Mode = 'web';

require __DIR__ . '/../../../configs/ALL/start.php';


/**
 *
 * Arrays
 */



$config = yii\helpers\ArrayHelper::merge(
    require Root . '/configs/ALL/main.php',
    require Root . '/configs/App/zsoft.php',
    require Root . '/configs/web/ALL.php',
    require Root . '/configs/web/zsoft.php',
    );

/*
echo '<pre>';
print_r($config);*/

(new Application($config))->run();


/*
$end = (float)array_sum(explode(' ', microtime()));
file_put_contents('time.txt', 'Processing time: ' . sprintf("%.4f", ($end - $start)) . ' seconds.');

*/

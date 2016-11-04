<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

function p($arr){
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}

require(__DIR__ . '/../vendor/autoload.php');

//require vender/yiisoft/yii2/classes.php 里面的所有文件
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/../config/contact.php');

$config = require(__DIR__ . '/../config/web.php');

(new yii\web\Application($config))->run();

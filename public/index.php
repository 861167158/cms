<?php
/**
 * Created by PhpStorm.
 * User: JaysonWang
 * Date: 16/5/21
 * Time: 下午9:54
 */

define('DEBUG', true);

date_default_timezone_set('PRC');

if(DEBUG){
	include '../application/config/debug/main.php';
}else{
	include '../application/config/release/main.php';
}

include '../vendors/system/XL.php';

$app = new XL();
$app->run();

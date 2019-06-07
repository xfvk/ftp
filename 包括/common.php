<?php
    
error_reporting(0);
header('Content-Type: text/html; charset=UTF-8');
define('IN_CRONLITE', true);
define('ROOT', dirname(__FILE__).'/');
define('LOGIN_KEY', 'abchdbb768541');
date_default_timezone_set("PRC");
$date = date("Y-m-d H:i:s");
session_start();

if(is_file(ROOT.'360safe/360webscan.php')){//360网站卫士
    require_once(ROOT.'360safe/360webscan.php');
}
include ROOT.'../config.php';

if(!isset($port))$port='3306';
//连接数据库
include_once(ROOT."db.class.php");
$DB=new DB($host,$user,$pwd,$dbname,$port);

$password_hash='!@#%!s!';
include ROOT."function.php";
include ROOT."member.php";
include ROOT."os.php";
include ROOT."kill.intercept.php";
?>
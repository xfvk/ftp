<?php
if(!defined('IN_CRONLITE'))exit();

if(isset($_COOKIE["islogin"])){
	if($_COOKIE["admin_user"]){
		$admin_user=base64_decode($_COOKIE['admin_user']);
		$udata = $DB->get_row("SELECT * FROM fish_admin WHERE username='$admin_user' limit 1");
		if($udata['username']==''){
			setcookie("islogin", "", time() - 604800);
			setcookie("admin_user", "", time() - 604800);
			setcookie("admin_pass", "", time() - 604800);
		}
		$admin_pass=sha1($udata['password'].LOGIN_KEY);
		if($admin_pass==$_COOKIE["admin_pass"]){
			$islogin=1;
		}else{
			setcookie("islogin", "", time() - 604800);
			setcookie("admin_user", "", time() - 604800);
			setcookie("admin_pass", "", time() - 604800);
		}
	}
}
if(isset($_SESSION['islogin'])){
	if($_SESSION["admin_user"]){
		$admin_user=base64_decode($_SESSION['admin_user']);
		$udata = $DB->get_row("SELECT * FROM fish_admin WHERE username='$admin_user' limit 1");
		$admin_pass=sha1($udata['password'].LOGIN_KEY);
		if($admin_pass==$_SESSION["admin_pass"]){
			$islogin=1;
		}
	}
}
?>
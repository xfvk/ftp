<?php

include("../include/common.php");

	if($islogin==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");	if(isset($_POST['data'])){

	$name=daddslashes($_POST['name']);

	$qq=daddslashes($_POST['qq']);

	$sql="update fish_admin set name='$name',qq='$qq' where id='{$udata['id']}';";

	$DB->query($sql);

	exit("<script language='javascript'>alert('资料修改成功！');window.location.href='./modify.php';</script>");

}else if(isset($_POST['passwd'])){

	$oldpass=daddslashes($_POST['oldpass']);

	if($udata['password'] == md5($oldpass)){

		$newpass=daddslashes($_POST['newpass']);

		$checkpass=daddslashes($_POST['checkpass']);

		if($newpass==$checkpass){

			if($newpass==''){exit("<script language='javascript'>alert('新密码不允许为空！');history.go(-1);</script>");}

			$newpass=md5($newpass);

			$sql="update fish_admin set password='$newpass' where id='{$udata['id']}';";

			$DB->query($sql);

			setcookie("islogin", "", time() - 604800);

			setcookie("admin_user", "", time() - 604800);

			setcookie("admin_pass", "", time() - 604800);

			unset($_SESSION['islogin']);

			unset($_SESSION['admin_user']);

			unset($_SESSION['admin_pass']);

			exit("<script language='javascript'>alert('您的密码已修改成功，请使用新密码重新登陆！');window.location.href='./login.php';</script>");

		}else{

			exit("<script language='javascript'>alert('两次密码输入不一致，验证新密码失败！');history.go(-1);</script>");

		}

	}else{

		exit("<script language='javascript'>alert('旧密码不正确！');history.go(-1);</script>");

	}

}

?>

<!DOCTYPE html>

<html lang="zh-cn">

<head>

  <meta charset="utf-8"/>

  <meta name="viewport" content="width=device-width, initial-scale=1"/>

  <title>修改密码</title>

</head>

<body>

 <table width="100%" border="0" cellspacing="1" cellpadding="2" align="center" bgcolor="0071bc">

<tr bgcolor="#EEEEEE" align="center"><td height="21"><a href="index.php">数据查看</a></td><td bgcolor="#EEEEEE"><a href="pass.php">修改密码</a></td><td height="21"><a href="http://wpa.qq.com/msgrd?v=3&uin=2846998494&site=qq&menu=yes">联系客服</a></td><td height="21"><a href="login.php?logout">退出登录</a></td></tr>

</table>

  <form class="js-validation-bootstrap" action="pass.php" method="post" novalidate="novalidate">

  

            <div class="input-group">

              <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>

</br>

              <input type="text" name="oldpass" id="password" class="form-control" placeholder="请输入旧密码" required="required"/>

            </div><br/>

<div class="input-group">

              <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>

              <input type="text" name="newpass" id="password" class="form-control" placeholder="请输入新密码" required="required"/>

            </div><br/>

<div class="input-group">

              <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>

              <input type="text" name="checkpass" id="password" class="form-control" placeholder="请确认新密码" required="required"/>

            </div><br/>

            <div class="form-group">

            <div class="col-xs-14"><input name="passwd" type="submit" value="确定修改" class="btn btn-primary form-control"/></div>

 

            			

   

</body>

</html>

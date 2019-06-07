<?php

include("../include/common.php"); 

if($islogin==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>"); 

$r1 = $DB->count("SELECT COUNT(id) from fish_user");

?>

<!DOCTYPE html>

<html lang="zh-cn">

<head>

  <meta charset="utf-8"/>

  <meta name="viewport" content="width=device-width, initial-scale=1"/>

  <title>QQ空间钓鱼管理中心</title>

  <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>

  <script src="//cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>

  <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!--[if lt IE 9]>

    <script src="//cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>

    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>

  <![endif]-->

</head>

<body>

  <nav class="navbar navbar-fixed-top navbar-default">

    <div class="container">

      <div class="navbar-header">

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

          <span class="sr-only">导航按钮</span>

          <span class="icon-bar"></span>

          <span class="icon-bar"></span>

          <span class="icon-bar"></span>

        </button>

        <a class="navbar-brand" href="./">QQ空间钓鱼管理中心</a>

      </div><!-- /.navbar-header -->

      <div id="navbar" class="collapse navbar-collapse">

        <ul class="nav navbar-nav navbar-right">

          <li class="active">

            <a href="./"><span class="glyphicon glyphicon-user"></span> 平台首页</a>

          </li>

		  <li class="">
            <a href="./list.php"><span class="glyphicon glyphicon-calendar"></span> QQ管理</a>

             </li>

          <li><a href="./login.php?logout"><span class="glyphicon glyphicon-log-out"></span> 退出登陆</a></li>

        </ul>

      </div><!-- /.navbar-collapse -->

    </div><!-- /.container -->

  </nav><!-- /.navbar -->

  <div class="container" style="padding-top:70px;">

    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">

      <div class="panel panel-primary">

        <div class="panel-heading"><h3 class="panel-title">管理首页</h3></div>

          <ul class="list-group">

         

			<li class="list-group-item"><span class="glyphicon glyphicon-tint"></span> <b></b>QQ总数:<?php echo $r1?>

			

			</li>

            <li class="list-group-item"><span class="glyphicon glyphicon-time"></span> <b>现在时间：</b><?php echo date("Y-m-d h:i:sa")?>  </li>

			<li class="list-group-item"><span class="glyphicon glyphicon-home"></span> <a href="./list.php" class="btn btn-xs btn-warning">QQ管理</a>

			</li>

          </ul>

      </div>

<div class="panel panel-info">

	<div class="panel-heading">

		<h3 class="panel-title">服务器信息</h3>

	</div>

	<ul class="list-group">

		<li class="list-group-item">

			<b>PHP 版本：</b><?php echo phpversion() ?>

			<?php if(ini_get('safe_mode')) { echo '线程安全'; } else { echo '非线程安全'; } ?>

		</li>

		<li class="list-group-item">

			<b>MySQL 版本：</b><?php echo $mysqlversion[0] ?>

		</li>

		<li class="list-group-item">

			<b>服务器软件：</b><?php echo $_SERVER['SERVER_SOFTWARE'] ?>

		</li>

		

		<li class="list-group-item">

			<b>程序最大运行时间：</b><?php echo ini_get('max_execution_time') ?>s

		</li>

		<li class="list-group-item">

			<b>POST许可：</b><?php echo ini_get('post_max_size'); ?>

		</li>

		<li class="list-group-item">

			<b>文件上传许可：</b><?php echo ini_get('upload_max_filesize'); ?>

		</li>

	</ul>

</div>

    </div>

  </div>

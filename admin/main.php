<?php
	session_start();
	if(!isset($_SSEION["is_login"])){
		$message="请登录！";
		$url="login.php";
		include="message.php";
		exit;
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>内容管理系统</title>
	<script src="../js/jquery.min.js"></script>
</head>
<style>
	.header{
		width:100%;
		height:20%;
		border-bottom:2px solid #000;
		text-align:center;
	}
	.main{
		width:100%;
		height:80%;
	}
	.left{
		width:20%;
		height:100%;
		float:left;
		border-right:2px solid #000;
	}
	.right{
		width:80%;
		height:100%;
		float:left;
	}
	.opt{
		cursor: pointer;
	}
</style>
<body>
	<div class="header">
		<h1>xxx欢迎来到内容管理系统</h1>
	</div>
	<div class="main">
		<div class="left">
			<ul class="menu">
				<li class="opt">
					用户管理
					<ul class="son">
						<li><a href="" target="right">添加用户</a></li>
						<li><a href="">管理用户</a></li>
					</ul>
				</li>
				<li class="opt">
					分类管理
					<ul class="son">
						<li><a href="">添加分类</a></li>
						<li><a href="">管理分类</a></li>
					</ul>
				</li>
				<li class="opt">
					内容管理
					<ul class="son">
						<li><a href="">添加内容</a></li>
						<li><a href="">管理内容</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="right">
			<iframe src="" frameborder="0" name="right"></iframe>
		</div>
	</div>
</body>
<script>
	$(function(){
		$(".opt").click(function(){
			$(this).find(".son").toggle();
		})
	})
</script>
</html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>登录</title>
</head>
<style>
	body{
		margin:0;
		padding:0;
	}
	.box{
		width:400px;
		height:300px;
		position:fixed;
		left:0;
		right:0;
		top:0;
		bottom:0;
		margin:auto;
		box-shadow:0 0 23px -6px crimson;
	}
	h2{
		text-align: center;
		height:50px;
		line-height: 50px;
	}
	form{
		text-align: center;
	}
</style>
<body>
	<div class="box">
		<h2>登录页</h2>
		<form action="checkLogin.php" method="post">
			用户名：<input type="text" name="username"/></br></br>
			密&nbsp;&nbsp;&nbsp;码：<input type="text" name="password"/></br></br>
			<input type="submit" value="登录"/></br></br>
			<span>
				还没注册，去
				<a href="reg.php">注册</a>
			</span>
		</form>
	</div>
</body>
</html>
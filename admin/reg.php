<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>注册</title>
	<script src="../js/jquery.min.js"></script>
	
</head>
<style>
	body{
		margin:0;
		padding:0;
	}
	.box{
		width:400px;
		height:350px;
		position:fixed;
		left:0;
		right:0;
		top:0;
		bottom:0;
		margin:auto;
		border:1px solid dodgerblue;
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
		<h2>注册页</h2>
		<form action="addReg.php" method="post">
			用户名：<input type="text" name="username"/></br>
			<span class="message"></span>
			</br>
			</br>
			密&nbsp;&nbsp;&nbsp;码：<input type="text" name="password"/></br>
			<span class="message"></span>
			</br>
			</br>
			<input type="submit" value="注册" disabled="disabled" name="btn"/></br>
			</br>
			<span>
				已完成注册，去
				<a href="login.php">登录</a>
			</span>
		</form>
	</div>
</body>
<script>
	//1.格式是否正确
	//2.检查数据库
	$(function(){
		var btn=$("input[name=btn]");
		$("input[name=username]").keyup(function(){
			var reg=/^[0-9a-zA-Z]{5,9}$/;
			var val=$(this).val();
			//console.log(val);
			//用户名
			if(!reg.test(val)){
				$(".message").eq(0).html("格式错误").css("color","red");
				btn.attr("disabled","true");
				$("input[name=username]").removeAttr("ok");//如果输入的用户名符合正则，则加上属性ok，然后再输入，则不符合正则，但是ok属性还在，所以需要在不符合正则的时候移除ok
			}else{
				//检查数据库,用户名是否重复
					$.ajax({
					url:"selectUser.php",
					data:{username:val},
					success:function(e){
						console.log(e);
						if(e=="ok"){
							$("input[name=username]").attr("ok","ok");
							$(".message").eq(0).html("用户名可用").css("color","green");
							if($("input[name=password]").attr("ok")=="ok"){
								btn.removeAttr("disabled");
							}
						}else if(e=="error"){
							$(".message").eq(0).html("用户名不可用").css("color","red");
							btn.attr("disabled","true");
							$("input[name=username]").removeAttr("ok");
						}
					}
				})
			}
		})
		//密码
		$("input[name=password]").keyup(function(){
			var reg=/^[0-9a-zA-Z]{5,9}$/;
			var val=$(this).val();
			//console.log(val);
			//密码
			if(!reg.test(val)){
				$(".message").eq(1).html("格式错误").css("color","red");
				btn.attr("disabled","true");
				$("input[name=password]").removeAttr("ok");
			}else{
				$(".message").eq(1).html("格式正确").css("color","green");
				$("input[name=password]").attr("ok","ok");
				if($("input[name=username]").attr("ok")=="ok"){
					btn.removeAttr("disabled");
				}
//				$.ajax({
//					url:"addReg.php",
//					data:{password:val}
//				})
			}
		})
		
	})
</script>
</html>
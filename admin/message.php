<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>提示信息</title>
	<style>
		.box{width:400px;height:300px;border:1px solid cornflowerblue;position:fixed;left:500px;top:150px;margin:auto;}
		.title{width:100%;height:30px;line-height:30ox;text-align:center;position:absolute;left:0;top:0;background:cornflowerblue;}
		.back{position:absolute;top:100px;left:140px;}
		p{text-align:center;}
		span{color:red;font-size: 20px;}
		input{margin-left:40px;}
	</style>
</head>
	<div class="box">
		<div class="title">提示信息</div>
		<div class="back">
			<p>操作成功</p>
			<p>页面在<span> 3 </span>秒内返回</p>
			<input type="button" value="返回"/>
		</div>
	</div>
	<script>
		var span=document.querySelector("span");
		console.log(span)
		var num=3;
		var t=setInterval(function(){
			num--
			if(num<0){
				clearInterval(t);
				location.href="login.php";
			}else{
				span.innerHTML=num;
			}
		},1000)
	</script>
</html>
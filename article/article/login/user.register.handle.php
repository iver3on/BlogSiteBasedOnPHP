<?php
	require_once('../connect.php');
	//把传递过来的信息入库,在入库之前对所有的信息进行校验。
	if(!(isset($_POST['password'])&&(!empty($_POST['password'])))){
		echo "<script>alert('password不能为空');window.location.href='user.login.php';</script>";
	}
	$name = $_POST['username'];
	$password = $_POST['password'];
	$insertsql = "insert into user(name, password) values('$name', '$password')";
	if(mysql_query($insertsql)){
		echo "<script>alert('注册成功');window.location.href='user.manage.php';</script>";
	}else{
		echo "<script>alert('注册失败');window.location.href='user.manage.php';</script>";
	}
?>
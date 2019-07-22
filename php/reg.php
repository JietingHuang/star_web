<?php 
require_once('pdo.php');
$username=htmlentities(trim($_POST['username']));
$password=md5($_POST['password']);
$repassword=md5($_POST['repassword']);
$unum=$_POST['unum'];
$sql="select username from userinfo where username='{$username}'";
$rs=$pdo->query($sql);
$result=$rs->fetch(PDO::FETCH_ASSOC);
if ($result) {
	echo'<script>alert("该用户名已存在！");history.back();</script>';
	exit();
}else{
	$sql="insert into userinfo(username,password,repassword,unum) values('{$username}','{$password}','{$repassword}','{$unum}')";
	$pdo->query($sql);
	echo'<script>alert("注册成功,请返回首页登录！");history.back();</script>';
	// sleep(2);
	// header('Location:login.php');	
}
 ?>
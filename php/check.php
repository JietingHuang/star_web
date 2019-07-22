<?php
require_once('pdo.php');
session_start();
$username=htmlentities(trim($_POST['username']));
// $username=addcslashes($username);
$password=md5($_POST['password']);
$sql="select * from userinfo where username='{$username}'";
$rs=$pdo->query($sql);
$result=$rs->fetch(PDO::FETCH_ASSOC);
if ($result==false) {
	echo '<script>alert("不存在此用户名，请注册或重新登录！");history.back();</script>';
	exit();
}else{
	if ($password==$result['password']) {
		$_SESSION['username']=$result['username'];
		$logintime=time();
		$loginip=$_SERVER['REMOTE_ADDR'];
		$sql="update userinfo set logintime=$logintime,loginip='{$loginip}',login_count=login_count+1  where id={$result['id']}";
		$pdo->exec($sql);
		header('Location:index.php');
		if ($_POST['auto']==1) {
			$auto=md5($username . $password);
			setcookie('auto',$auto,time()+10*24*3600);
		}
	}else{
		echo '<script>alert("密码错误！");history.back();</script>';
	exit();
	}
}
?>
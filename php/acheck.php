<?php 
	session_start();
	require("conn2.php");
	$name=$_POST['Aname'];
	$pwd=$_POST["password"];
	$id=$_POST["id"];
	$_SESSION['Aid'] = $id;
	if (empty($name)) {
        	echo '<script>alert("管理名必须输入");history.back();</script>';
        	exit();}
	if (empty($pwd)) {
       	 echo '<script>alert("管理员密码必须输入");history.back();</script>';
        	exit();}
	$pdo->query('set names utf8'); 
	$sql="select * from admin where AID={$id}";
	$rs=$pdo->query($sql);
	// //var_dump($rs);
	$result=$rs->fetch (PDO::FETCH_ASSOC);
	 if($result==false){

	echo"管理员编号或管理名或密码错误";
}
	else{
		$_SESSION['Aname']=$name;
	 	header("location:admin.php");
	}
?>
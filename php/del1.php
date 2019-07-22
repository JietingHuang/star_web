<?php 
	require_once("pdo.php");
	$id=$_POST['id'];
	if(empty($id)){
		echo'<script>alert("请提供要删除的ID");history.back()</script>';
	}
	$del="delete from liuyanban where id=$id";
	$result=$pdo->exec($del);
	if($result!==false){
		echo'删除成功！';
	}
 ?>
 	<a href="admin.php"><input type="button" value="返回主页"></a>
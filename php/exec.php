<?php 
require_once("pdo.php");
$title=$_POST['title'];
$comment=$_POST['comment'];
$author=$_POST['author'];
$time=date('Y-m-d h:i:s');
$sql="insert into liuyanban(title,comment,author,time)values('$title','$comment','$author','$time')";
$result=$pdo->exec($sql);
if($result!==false){
	echo'留言成功!';
} 
 ?>
   <p>
   <a href="liuyanban.html"><input type="button" value="返回留言"></a>
     <a href="msgBoard.php"><input type="button" value="留言列表"></a>
 </p>
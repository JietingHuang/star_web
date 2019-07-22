<?php
// require('check_login.php');
 
header('Content-type:text/html;charset=utf-8');
$name=trim($_POST['Sname']);
$name=strtolower($name);
$id=$_POST['id'];
$intro=$_POST['intro'];
$date=$_POST['date'];
 
require('conn2.php');

 

$sql="update star_info set Sname='{$name}',sintrouduce='{$intro}',sdate='{$date}'where starID={$id}";
$pdo->exec($sql);
	
header('Location:starplay.php');
?>
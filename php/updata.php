<?php
// require('check_login.php');
 
header('Content-type:text/html;charset=utf-8');
$username=trim($_POST['username']);
$username=strtolower($username);
$id=$_POST['id'];
$email=$_POST['email'];
 
require('conn2.php');
 
$sql="select * from userinfo where username='{$username}' and id!={$id}";
$rs=$pdo->query($sql);
$result=$rs->fetch(PDO::FETCH_ASSOC);
if ($result) {
    echo '<script>alert("用户名已存在");history.back();</script>';
    exit();
}
$sql="update userinfo set username='{$username}',unum='{$email}' where id={$id}";
$pdo->exec($sql);
header('Location:userplay.php');
?>
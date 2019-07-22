<?php
$id=$_GET['id'];
 
require('conn2.php');
$sql="delete from userinfo where id={$id}";
if ($pdo->exec($sql)) {
    $url='userplay.php';
    header('Location:'.$url);
}
?>
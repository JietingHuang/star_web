<?php 
header("Content-Type: text/html; charset=utf-8");//设置头部样式  
try {
	$dsn='mysql:host=127.0.0.1;dbname=message';
	$pdo=new PDO($dsn,'root','');
} catch (PDOException $e) {
	echo'error:'.$e->getMessage();
}
$pdo->exec('set names utf8');
 ?>
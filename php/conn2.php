<?php 
// header('Content-type:tex/httml;charset=utf8');
try {
$dsn="mysql:host=localhost;dbname=star_web";
$pdo=new PDO($dsn,'root','');
} 
catch (PDOException $e) 
{
echo '数据库连接失败:'.$e->getMessage();
}
$pdo->query('set names utf8');//指定PDO字符集
 ?>
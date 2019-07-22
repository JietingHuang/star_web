<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	$m=$_POST["m"];
	$d=$_POST["d"];
	$star;
	$id;
	switch ($m) {
		case  1 :
			if($d<=20){
				//$star="摩羯座";
				$id=12;
			}
			elseif($d<=31){
				//$star="水瓶座";
				$id=1;
			}
			else{
				echo"请输入正确的日期";
			}
			break;
			case  2 :
			if($d<=19){
				$id=1;
				//$star="水瓶座";
			}
			elseif($d<=29){
				//$star="双鱼座";
				$id=2;
			}
			else{
				echo"请输入正确的日期";
			}
			break;
			case  3 :
			if($d<=21){
				//$star="双鱼座";
				$id=2;
			}
			elseif($d<=31){
				//$star="白羊座";
				$id=3;
			}
			else{
				echo"请输入正确的日期";
			}
			break;
			case  4 :
			if($d<=20){
				//$star="白羊座";
				$id=3;
			}
			elseif($d<=30){
				//$star="金牛座";
				$id=4;
			}

			else{
				echo"请输入正确的日期";
			}
			break;
			case  5 :
			if($d<=21){
				//$star="金牛座";
				$id=4;
			}
			elseif($d<=31){
				//$star="双子座";
				$id=5;
			}

			else{
				echo"请输入正确的日期";
			}
			break;
			case  6 :
			if($d<=22){
				//$star="双子座";
				$id=5;
			}
			elseif($d<=30){
				//$star="巨蟹座";
				$id=6;
			}
			break;
			case  7 :
			if($d<=23){
				//$star="巨蟹座";
				$id=6;
			}
			elseif($d<=31){
				//$star="狮子座";
				$id=7;
			}
			else{
				echo"请输入正确的日期";
			}
			break;
			case  8 :
			if($d<=23){
				//$star="狮子座";
				$id=7;
			}
			elseif($d<=31){
				//$star="处女座";

				$id=8;
			}
			else{
				echo"请输入正确的日期";
			}
			break;
			case  9 :
			if($d<=23){
				//$star="处女座";
				$id=8;
			}
			elseif($d<=30){
				//$star="天秤座";
				$id=9;
			}
			else{
				echo"请输入正确的日期";
			}
			break;
			case  10 :
			if($d<=23){
				//$star="天秤座";
				$id=9;
			}
			elseif($d<=31){
				//$star="天蝎座";
				$id=10;
			}
			else{
				echo"请输入正确的日期";
			}
			break;
			case  11 :
			if($d<=23){
				//$star="天蝎座";
				$id=10;
			}
			elseif($d<=30){
				//$star="射手座";
				$id=11;
			}
			else{
				echo"请输入正确的日期";
			}
			break;
			case  12 :
			if($d<=23){
				//$star="射手座";
				$id=11;
			}
			elseif($d<=31){
				//$star="摩羯座";
				$id=12;
			}
			else{
				echo"请输入正确的日期";
			}
			break;
		}
 ?>
 <?php 
	header('Content-type:text/html;charset=utf8');
	require_once("conn2.php");
	$pdo->query('set names utf8'); 
	$sql="select * from star_info where starID={$id}";
	$rs=$pdo->query($sql);
	//var_dump($rs);
	$result=$rs->fetch(PDO::FETCH_ASSOC);
	 // var_dump($result);
	foreach ($pdo ->query($sql) as $value) {
    	echo '您的星座是：'.$value['Sname'].'<br>'.'星座图片:'. "<img src='".$value['picpath']."' />".'<br>'.'星座时间：'.$value['sdate'].'<br>'.'星座介绍:'.$value['sintrouduce'];}
    	$rs=null;
	$pdo=null;

?>
<?php 
require_once("pdo.php");
$check="select *from liuyanban" ;
$rs=$pdo->query($check);
//var_dump($rs);
$list=$rs->fetchAll(PDO::FETCH_ASSOC);//返回关联数组
// var_dump($list);
 ?>
 <table>
	<thead>
		<tr>
			<th>id</th>
			<th>留言人</th>
			<th>主题</th>
			<th>内容</th>
			<th>留言时间</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			foreach($list as $key=>$value) {
		 ?>
		<tr>
			<td><?php echo $value['id']?></td>
			<td><?php echo $value['author']?></td>
			<td><?php echo $value['title']?></td>
			<td><?php echo $value['comment']?></td>
			<td><?php echo $value['time']?></td>
		</tr>
		<?php 
			}
		 ?>
	</tbody>
 </table>
	<p>
	<a href="liuyanban.html"><input type="button" value="返回留言"></a>
	</p>

 

 

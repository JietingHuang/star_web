<?php 
	require("conn2.php");
	// require("check_login.php");
	$pdo->query('set names utf8'); 
	$sql="select * from userinfo";
	$rs=$pdo->query($sql);
	$result=$rs->fetch (PDO::FETCH_ASSOC);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <table>
        <caption>用户列表</caption>
        <thead>
            <tr>
                <th>用户id</th>
                <th>用户名</th>
                <th>email/手机</th>
                <th>登录次数</th>
                <th>登录时间</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pdo->query($sql) as $value) {?>
            <tr>
                <td><?=$value['id']?></td>
                <td><?=$value['username']?></td>
                <td><?=$value['unum']?></td>
                <td><?=$value['login_count']?></td>
                <td><?=empty($value['logintime'])?'':date('Y-m-d',$value['logintime'])?></td>
                <td><a href="edit.php?id=<?=$value['id']?>">修改</a> <a href="del.php?id=<?=$value['id']?>" onclick="return del_comfirm();">删除</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <p>
        <a href="admin.php"><input type="button" value="返回主页"></a>
    </p>
    <script>
        function del_comfirm(){
            if (confirm('是否确认删除？')) {
                return true;
            }else{
                return false;
            }
        }
    </script>
 </body>
 </html>
 	
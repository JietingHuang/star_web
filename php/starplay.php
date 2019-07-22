<?php 
    require("conn2.php");
    // require("check_login.php");
    $pdo->query('set names utf8'); 
    $sql="select * from star_info";
    $rs=$pdo->query($sql);
    $result=$rs->fetch (PDO::FETCH_ASSOC);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <title></title>
 </head>
 <body>
    <p>
        <a href="admin.php"><input type="button" value="返回主页"></a>
    </p>
 <table>
                <style>
        table{
            width:80%;
            border-collapse: collapse;
        }
        table,th,td{
            border:1px solid #aaa;
            
        }
    </style>
        <caption>星座信息列表</caption>
        <thead>
            <tr>
                <th>星座id</th>
                <th>星座名</th>
                <th>星座时间</th>
                <th>星座介绍</th>
                <th>星座图片</th>
                <th>操作</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($pdo->query($sql) as $value) {?>
            <tr>
                <td><br><?=$value['starID']?></td>
                <td><br><?=$value['Sname']?></td>
                <td><br><?=$value['sdate']?></td>
                <td><br><?=$value['sintrouduce']?></td>
                <td><img src="<?=$value['picpath']?>"/></td>

                <td><a href="staredit.php?id=<?=$value['starID']?>">修改</a> </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

 </body>
 </html>
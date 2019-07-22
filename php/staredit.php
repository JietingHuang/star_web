<!-- <?php
// require('check_login.php');
?> -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>星座信息修改</title>
</head>
<body>
    <h3>星座信息修改</h3>
    <?php
    $id=$_GET["id"];
    require('conn2.php');
    $sql="select * from star_info where starID={$id}";
    $rs=$pdo->query($sql);
    $result=$rs->fetch(PDO::FETCH_ASSOC);
    if (!$result) {
        echo '<script>alert("未找到该星座");history.back();</script>';
        exit();
    }
    ?>
    <form action="starupdata.php" method="post">
        <p>
            星座id：<input type="text" name="id" placeholder="星座id" value="<?=$result['starID']?>">
        </p>
        <p>
            星座名：<input type="text" name="Sname" placeholder="星座名"  value="<?=$result['Sname']?>">
        </p>
        <p>
            星座时间：<input type="text" name="date" placeholder="星座时间"  value="<?=$result['sdate']?>">
        </p>
        <p>
            星座介绍：<label for="intro"></label>
            <textarea name="intro" cols="50" rows="6" id="intro" ><?=$result['sintrouduce']?></textarea>  
        </p>
        <p>
            星座图片：<img src="<?=$result['picpath']?>"/>

            <input type="file" name="pImg"/><br/>
            <input type="button" value="上传图片"/>
   

        </p>
        <p>
            <input type="hidden" name="id" value="<?=$result['starID']?>">
            <input type="submit" value="修改">
        </p>
    </form>
</body>
</html>
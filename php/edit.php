<!-- <?php
require('check_login.php');
?> -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>用户信息修改</title>
</head>
<body>
    <h3>用户信息修改</h3>
    <?php
    $id=$_GET['id'];
    require('conn2.php');
    
    $sql="select * from userinfo where id={$id}";
    $rs=$pdo->query($sql);
    $result=$rs->fetch(PDO::FETCH_ASSOC);
    if (!$result) {
        echo '<script>alert("没找到用户");history.back();</script>';
        exit();
    }
    ?>
    <form action="updata.php" method="post">
        <p>
            id：<input type="text" name="id" placeholder="用户id" value="<?=$result['id']?>">
        </p>
        <p>
            用户名：<input type="text" name="username" placeholder="用户名"  value="<?=$result['username']?>">
        </p>
        <p>
            邮箱/手机：<input type="email" name="email" placeholder="电子邮箱/手机"  value="<?=$result['unum']?>">
        </p>
        <p>
            <input type="hidden" name="id" value="<?=$result['id']?>">
            <button type="submit">修改</button>
        </p>
    </form>
</body>
</html>
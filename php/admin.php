<?php 
session_start();
header('Content-type:text/html;charset=utf8');
// if (!isset($_SESSION['username'])) {
//         header('Location:index.php');
//     }
// unset($_SESSION['username']);//删除$_SESSION中的一个session变量
// session_unset(); //删除$_SESSION中所有的session变量
// session_destroy();
// require_once('pdo.php');
// if ($_SESSION['username']!=$result['Aname']) {
//     echo '<script>alert("请登录银河星座网！");location.href="index.php";</script>';
// }
// require_once('pdo.php');
// $sql="select * from userinfo where username='{$_SESSION['username']}'";
// $rs=$pdo->query($sql);
// $result=$rs->fetch(PDO::FETCH_ASSOC);
// echo'    *-* 亲爱的 '.$result['username'].
//         '，欢迎您第'.$result['login_count'].'次登录本网站，
//         您上次登录的时间是'.date('Y-m-d H:i:s',$result['logintime']);
?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>银河星座网管理界面</title>
    <link rel="stylesheet" type="text/css" href="admin.css" >
    <style type="text/css">
        body{
            background-image: url(../star_web/img/0001.jpg);
        }
    </style>
</head>
<body> 
    <div>
        <ul class="menu">
            <li><a href="admin.php">主页</a></li>
            <li><a href="userplay.php">用户表</a></li>
            <li><a href="starplay.php">星座表</a></li>
            <li><a href="arrangeMsg.php">留言表</a></li>   
        </ul>
    </div>   
    <div class="me">
        <img src="../star_web/img/backclose.png" width="20" height="20">
    </div>
    <div class="me2" id="me2_div">
        <img src="../star_web/img/ad_login.png" width="20" height="20" id="me2">
    </div>
    <div class="ad_login">
        <ul>    
            <li>
                <a href="ad_login.html" id="login_ad"><div id="triangle" ></div>管理员</a>
            </li>
                <ul>
                    <li><a href="userplay.php">用户管理</a></li>    
                    <li><a href="starplay.php">星座管理</a></li>
                    <li><a href="arrangeMsg.php">留言管理</a></li>
                </ul>
        </ul>
    </div>
    <div class="unload">
        <a href="ad_out.php" id="ad_out">注销</a>
    </div>   
    <div>
        <form action="#" method="get">
            <input class="search" type="text" />
            <input class="sousuo" type="submit" value="搜索" />
        </form>
    </div>
    <div class="container">
<!--     <?=$_SESSION['username']?>,欢迎您！ -->
        <div class="header">
        <!-- <img src="../star_web/img/002.png">
        <img src="../star_web/img/002.png">
        <img src="../star_web/img/003.png"> -->
            <div class="box1">
                <a href="#"><img src="../star_web/img/logo.jpg" alt="LOGO"  width="200.8" height=150" id="Insert_logo" ></a>
            </div>
            <div>
                <h1>银河星座网管理界面</h1>
            </div>
            <div>
                <ul class="box2">
                    <li><a class="shouye" href="#">设为首页</a></li>   
                    <li><a class="shoucang" href="#">加入收藏</a></li>
                </ul>
            </div>
        </div>
        <div class="sidebar">
              <ul class="nav">
                <li><a href="#">###</a></li>
                <li><a href="#">###</a></li>
                <li><a href="#">###</a></li>
                <li><a href="#">###</a></li>
                <li><a href="#">###</a></li>
                <li><a href="#">###</a></li>
                <li><a href="#">###</a></li>
                <li><a href="#">###</a></li>
                <li><a href="#">###</a></li>
            </ul>
        </div>
        <div class="content">
            <!-- <a href="#"><img src="../star_web/img/0001.jpg" width="500px" height="500px" style="margin-left: 130px;" /></a> 
            <div class="pic">
                <a href="#" onclick="changePic(1)">.</a>
                <a href="#" onclick="changePic(2)">.</a>
                <a href="#" onclick="changePic(3)">.</a>   
            </div> -->
            <p>十二星座 （占星学名词）</p>
            <p>&nbsp;&nbsp;在西方占星学上，黄道12星座是宇宙方位的代名词，一个人出生时，各星体落入黄道上的位置，说明了一个人的先天性格及天赋。黄道12星座象征心理层面，反映出一个人行为的表现的方式。于是将黄道分成12个星座，称为黄道12星座。依次为白羊座、金牛座、双子座、巨蟹座、狮子座、处女座、天秤座、天蝎座、射手座、摩羯座、水瓶座、双鱼座。</p>
                <p>白羊座</p><p>
                &nbsp;&nbsp;白羊座符号象征着新的开始。
                符号能量：控制。由于白羊座的上进心强，有时难免冲动，忽略他人的感受。
                白羊座的象征是一头公羊，也可以诠释成公羊的角和鼻子。白羊座始于春季的第一天，象征一个新的开始新生的绿芽，表现出大地新生和欣欣向荣的景象。</p>
                <p>金牛座</p><p>
                &nbsp;&nbsp;金牛座符号象征着力量。
                符号能量：丰富。金牛座符号体现了按部就班，从容淡定，但难免由于太固执而失去朋友。
                星座符号中的圆型代表着金星的出现，顾名思义金牛在黄道十二宫中代表“生产”，凡是能产生满足人们物质需要的各种设施、活动都属于它管辖范围。</p>
                <p>双子座</p><p>
                &nbsp;&nbsp;双子座符号象征着智慧。
                符号能量：掌握。双子座经常一心二用，兴趣广泛，但有时难免了解的不太深刻。
                双子座的星座符号是像Ⅱ的两根的平行直线，两头再以两根较短的横条封口，代表着CASTO与PULLUX这两颗永不分离的孪生星星，常被看成正反两面的象征，譬如对与错，施与受，教和学等。</p>      
                <p>巨蟹座</p><p>       
                &nbsp;&nbsp;巨蟹座     符号象征着坚强。    
                符号能量：热情。外表      时常冷漠的巨蟹座，内心充满善意和温情，应该适当的释放出来。   
                巨蟹座的星座符号就像是一只顶着硬壳的可爱小螃蟹横行的模样，有些占星家则认为，巨蟹座的星座符号像是两只对峙的小螃蟹，平衡着一个至日的起点，太阳在     夏日的第一天进入巨蟹座开始夏至。</p>
                <p>狮子座</p><p>
                &nbsp;&nbsp;狮子座符号象征着权力。
                符号能量：清醒。狮子座很多地方比较优秀，也较有魅力，但容易虚荣和骄傲，需要清醒。
                狮子座的星座符号是黄道十二宫中最简单辨认的了，就是一条狮子尾巴。</p>
                <p>处女座</p><p>
                &nbsp;&nbsp;处女座符号象征着美丽。
                符号能量：分析。处女座总是追求完美，要懂得分析不容得有瑕疵。
                处女座的星座符号可能是十二个星座符号中最难懂的，它与天蝎座符号十分相似，差别只是处女座符号上加上一个倒“v”，占星家认为，处女座的符号，就像是一位手持一串谷物的处女，而他们手中的每一粒谷物，都象征着由经验的田野中所收获的智慧果实。</p>
                <p>天秤座</p><p>
                &nbsp;&nbsp;天秤座符号象征着平衡。
                符号能量：衡量。公平是天秤座的优点，但要知道每个人心中的公平都不一样，没有标准。
                天秤座的星座符号可以说是一令人一目了然，一看就知道是一把四平八稳的秤，要求的就是如何取得两方平衡的天秤。</p>
                <p>天蝎座</p><p>
                &nbsp;&nbsp;天蝎座符号象征着神秘。
                符号能量：思考。天蝎座孤傲、冷漠，因此思考能力较强。
                天蝎座的星座符号看起来就像是一只翘着尾巴的毒蝎子，但对于许多西方占星家的眼中，天蝎座的符号其实是“蛇”，因为蛇在上古时代即被视做“智慧”和“罪恶”的象征，众所皆知的的是，人类的始祖亚当、夏娃会被驱逐出伊甸园的主要罪魁祸首就是受不了蛇的引诱，才会吃下智慧果铸成大错。</p>
                <p>射手座 </p><p>
                &nbsp;&nbsp;射手座符号象征着坦率。
                符号能量：直觉。射手座比较深刻，有时冷漠，但是射手座直觉能力较强。
                射手座的符号象徵射手的箭，回到象形的简单形式；由射手座的神话可以看出射手座的智慧和爱好自由。射手的原型是拿弓箭的人马，下半身的马象徵追求绝对自由，上半身的人象徵知识和智慧，而手中的箭，则表现出射手的攻击性和伤人的一面。</p>
                <p>摩羯座</p><p>
                &nbsp;&nbsp;摩羯座符号象征着坚韧。
                符号能量：放松。摩羯座总是有登峰的欲求，不要太过紧张，放松平静下来可能效果更理想。
                摩羯座的星座符号像是一笔划出山羊外形特征的一种古代象形文字，骨瘦如柴的身躯，却有攀登绝壁坚强的意志忍耐力，代表认真踏实的个性，而符号中有着山羊的头和胡须，其实摩羯座代表着就是山羊，而山羊本来就是一种个性非常强韧，且刻苦耐劳的动物。</p>
                <p>水瓶座</p><p>
                &nbsp;&nbsp;水瓶座符号象征着叛逆。
                符号能量：坚持。天赋可能让水瓶座比一些人更优秀，但多数成功来自点点滴滴的努力。
                水瓶座的符号象徵水和空气的波，是具象但又抽象的；由水瓶座的神话中，可以看出水瓶座的爱好自由和个人主义。象徵水瓶座的波，是高度知性的代表，由波的特性去思考水瓶座的特质，看似有规律但没有具体的形象。</p>
                <p>双鱼座</p><p>
                &nbsp;&nbsp;双鱼座符号象征着复杂。
                符号能量：信心。双鱼座总是很彷徨，理想与现实的彷徨，感情的彷徨，要学会选择，可能并没有真正的对与错。
                双鱼座的星座符号是两道弧，中间靠一道直线将它们串联起来，看起来就像是两条绑在一起的鱼，一条往上游去，另一条则向下游，完全背道而驰却因中间的一线相连，无论怎么拼命，结果还是无法分离，正好明显的点出双鱼座的两重人生。</p>
        </div>
        <div class="footer">
           <div class="tt">
                <a onclick="pageScroll()"><img width="70" height=70" src="../star_web/img/top5.png"></a>
           </div>
        </div>
    </div> 
    <div class="foot">
                <p>&nbsp;&nbsp;星座频道意见反馈留言板&nbsp;&nbsp;&nbsp;&nbsp;电话:18531468781&nbsp;&nbsp;&nbsp;&nbsp;欢迎批评指正</p>
               <p>银河星座网简介 | About Sina | 广告服务 | 招聘信息 | 网站律师 | SINA English | 通行证注册 | 产品答疑</p>     
               <p>Copyright © 1996-star_web DDY Corporation, All Rights Reserved     银河星座网公司     版权所有</p>
    </div>
</body>
<script src="index.js" ></script>
    <script type="text/javascript">
         function c(){
        <?php 
            if(isset($_SESSION['Aid'])){
         ?>
         var login_ad=document.getElementById("login_ad");
         login_ad.href="";
         var img=document.getElementById("me2");
         img.src="../star_web/img/admin.png";
           <?php    
            }else{
          ?>
          var ad_out=document.getElementById("ad_out");
          ad_out.href="";
          <?php } ?>
        }
        window.onload=c;
        // var n=1;
        // function changePic(m){
        //     return n=m;
        // }
        // function change(){
        //     var myImg=document.getElementsByTagName("img")[0];
        //     myImg.src="../star_web/img/000"+n+".jpg";
        //     if (n<3) {n++;}
        //     else n=1;
        // }
    </script>
</html>


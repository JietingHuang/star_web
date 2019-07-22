<?php 
session_start();
header('Content-type:text/html;charset=utf8');
// unset($_SESSION['username']);//删除$_SESSION中的一个session变量
// session_unset(); //删除$_SESSION中所有的session变量
// session_destroy();
// if ($_SESSION['username']!=$result['username']) {
//     echo '<script>alert("请重新登录");location.href="login.php";</script>';
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
    <title>银河星座网</title>
    <link rel="stylesheet" type="text/css" href="index.css" >
</head>
<body> 
    <div>
        <ul class="menu">
            <li><a href="index.php">首页</a></li>
            <li><a href="test.html" onclick="return c1();">测试</a></li>
            <li><a href="#" onclick="return c1();">心理</a></li>
            <li><a href="#" onclick="return c1();">图库</a></li>
            <li><a href="#" onclick="return c1();">漫画</a></li>
            <li><a href="#" onclick="return c1();">博客</a></li>  
            <li><a href="liuyanban.html" onclick=" return c1();">留言板</a></li>      
        </ul>
    </div>   
    <div class="me1" id="me1_div">
        <img src="../star_web/img/login.png" width="24" height="23" id="me1">
    </div>
    <div class="me">
        <img src="../star_web/img/backclose.png" width="20" height="20">
    </div>
    <div class="me2">
        <img src="../star_web/img/ad_login.png" width="20" height="20">
    </div>
    <div class="login" id="login">
        <a href="javascript:void(0)" onclick="show('light')" id="login_id">未登录</a>
    </div>
    <div id="light" class="white_content">
            <div class="close"><a href="javascript:void(0)" onclick="hide('light')">
                <img width="15" height="15"src="../star_web/img/close.png"></a>
            </div>
            <div class="con"> 
                <form action="check.php" method="post" onsubmit="return check()" name="myform">
                    <div class="two">
                        <input class="input" type="text" name="username" id="username" placeholder="用户名" class="text" autofocus />
                    </div>
                    <div class="two">
                        <input class="input" type="password" name="password" placeholder="密码" class="text" />
                    </div>
                    <div class="user">
                        <img src="../star_web/img/user.png" width="25" height="25">
                    </div>       
                    <div class="pwd">
                        <img src="../star_web/img/pwd.png" width="25" height="25">
                    </div>        
                    <div class="four">
                        <input class="button" type="submit" value="登录" onclick="check()" />      
                    </div>
                    <div class="five">  
                        <input type="checkbox" name="auto" value="1">十天内免登陆
                    </div>    
                    <div class="three">  
                        <a href="register.html">用户注册</a>
                    </div>      
                </form>
            </div>
        </div>
        <div id="fade" class="black_overlay"></div>
    <div class="register">
        <a href="register.html">注册</a>
    </div>  
    <div class="ad_login">
        <ul>    
            <li><a href="ad_login.html"><div id="triangle"></div>管理员</a></li>
                <ul>
                    <li><a href="#" onclick="return c2();">用户管理</a></li>    
                    <li><a href="#" onclick="return c2();">星座管理</a></li>
                    <li><a href="#" onclick="return c2();">留言管理</a></li>
                </ul>
        </ul>
    </div>
    <div class="unload">
        <a href="logout.php" id="logout">注销</a>
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
                <h1>银河星座网</h1>
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
                <li><a href="#" onclick="return c1();">猜你喜欢</a></li>
                <li><a href="#" onclick="return c1();">最新</a></li>
                <li><a href="#" onclick="return c1();">论坛</a></li>
                <li><a href="#" onclick="return c1();">运势</a></li>
                <li><a href="#" onclick="return c1();">话题</a></li>
                <li><a href="#" onclick="return c1();">名家</a></li>
                <li><a href="#" onclick="return c1();">民俗</a></li>
                <li><a href="#" onclick="return c1();">答疑</a></li>
                <li><a href="#" onclick="return c1();">更多</a></li>
            </ul>
        </div>
        <div class="content">
            <!-- <a href="#"><img src="../star_web/img/0001.jpg" width="500px" height="500px" style="margin-left: 130px;" /></a> 
            <div class="pic">
                <a href="#" onclick="changePic(1)">.</a>
                <a href="#" onclick="changePic(2)">.</a>
                <a href="#" onclick="changePic(3)">.</a>   
            </div> -->
            <div >
                <div>
                    <h4><a href=""  target="_blank">十二星座谁最容易嫁进豪门！</a></h4>
                </div>
                <div >
                    <ul>                               
                        <li><a href="" target="_blank"><img src="img/2b16ceeabee04099809711f0b38dd7fc.jpeg" alt="images"></a></li>
                    </ul>
                </div>
                <div >
                    <a href="" data-role="channelLink" target="_blank" > 星座 </a>
                    <span class="name"><a href="" target="_blank">星座</a></span> 
                    <span class="time"  data-role="time"></span>
                    <a  href="" target="_blank"></a>
                </div>
            </div>                   
            <div  >
                <h4><a href="" target="_blank">九月份最易走好运的4大生肖！</a></h4>         
            <div >
                <a href=""  target="_blank" >  星座</a>
                <a href="" target="_blank">星座运势心理</a>
            </div>
            </div>             
            <div >
                <h4><a href="" target="_blank">这些原因会让12星座难成大器</a></h4>      
                <div >
                    <a href=""  target="_blank" >  星座</a>
                    <a href="" target="_blank">科技紫微星座网</a>
                    <a  href="" target="_blank"></a>
                </div>
            </div>                        
            <div >
                <div >
                    <a href="" target="_blank"><img src="img/49ac267af042447d9cc739dcc8725648.jpeg" alt="images"/></a>                
                </div>
                <h4><a href="" target="_blank">先买房还是先买车？12星座这么选更优</a></h4>               
            <div >
                <a href=""  target="_blank" >  星座</a>
                <a href="" target="_blank">科技紫微星座网</a>
                <a  href="" target="_blank"></a>
            </div>
            </div>                        
            <div >
                <div >
                    <a href="" target="_blank"><img src="img/ebb30fb07e6847969e6376404ece9524.jpeg" alt="images"/></a>                    
                </div>
                <h4><a href="" target="_blank">十二星座容易对什么事后悔？</a></h4>
                <div >
                    <a href="" data-role="channelLink" target="_blank" >  星座</a>
                    <a href="" target="_blank">星座不求人</a>
                    <a  href="" target="_blank"></a>
                </div>
            </div>
            <div >
                <h4><a href=""  target="_blank">什么迹象表明，12星座的ta不是你的真爱？</a></h4>
                <div >         
                    <ul>                                
                        <li  ><a href="" target="_blank"><img src="img/2cd5a469d41c40e591b0e0d61f66fc0a.jpeg" alt="images"></a></li>
                        <li ><a href="" target="_blank"><img src="img/e339b65725fa444cbf1037167b4b4514.jpeg" alt="images"></a></li>
                        <li ><a href="" target="_blank"><img src="img/9e6e0fd7a6864e3982b54db8592afbf0.jpeg" alt="images"></a></li>
                    </ul>
                </div>
                <div>
                    <a href=""  target="_blank"> 星座 </a>
                    <a href="" target="_blank">最星座</a> 
                    <a  href="" target="_blank"></a>
                </div>
            </div>                        
            <div >
                <div >
                    <a href="" target="_blank"><img src="/img/22fb26d40e604f858dbf2b4c8efa41e1.jpeg" alt="images"/></a>                    
                </div>
                <h4><a href="//" target="_blank">眼光超准星座女，老公一个比一个找得好</a></h4>
                <div >
                    <a href=""  target="_blank" data-channel-id="27">  星座</a>
                    <a href="" target="_blank">星吧GEO</a>
                    <a  href="" target="_blank"></a>
                </div>          
                <div >
                    <h4><a href="" target="_blank">诡魅塔罗占卜师Victor预测12星座9月14日运势</a></h4>      
                    <div >
                        <a href=""  target="_blank" >  星座</a>
                        <a href="" target="_blank">诡魅塔罗</a>
                        <a  href="" target="_blank"></a>
                    </div>
                </div>
            </div>                     
            <div >
                <h4><a href="" target="_blank">总喜欢跟风追剧的星座 </a></h4>      
                <div >
                    <a href=""  target="_blank" >  星座</a>
                    <a href="" target="_blank">Face星座</a>
                    <a  href="" target="_blank"></a>
            </div>
        </div>                        
        <div >
                <div >
                    <a href="" target="_blank"><img src="img/f870ba84b1234202bf4940a438419b20.png" alt="images"/></a>              
                </div>
                <h4><a href="" target="_blank">9月14号生肖运势排行</a></h4>
            <div >
                <a href="" target="_blank">  星座</a>
                <a href="" target="_blank">易鑫Teacher</a>
                <a href="" target="_blank"></a>
            </div>
        </div>                       
        <div >
            <h4><a href="" target="_blank">男朋友爱你1级到10级都是什么表现？</a></h4>
            <a href=""  target="_blank" >  星座</a>
            <a href="" target="_blank">同道大叔</a> 
            <a  href="" target="_blank"></a>
        </div>                      
        <div >
            <div >
                <a href="" target="_blank"><img src="img/da44721dc2f04f93a2f5dcb869e335b0.jpeg" alt="images"/></a>                 
            </div>
            <h4><a href="" target="_blank">牵手就是一辈子的星座配对</a></h4>     
            <div >
                <a href=""  target="_blank" >  星座</a>
                <a href="" target="_blank">朵朵塔罗星座占卜馆</a>
                <a  href="" target="_blank"></a>
            </div>
        </div>                     
        <div >
            <div >
                <a href="" target="_blank"><img src="img/844afe9751034a0a9163a1643ceb841e.jpeg" alt="images"/></a>                   
            </div>
            <h4><a href="" target="_blank">不愁升职的生肖盘点</a></h4>       
            <div >
                <a href=""  target="_blank">  星座</a>
                <a href="" target="_blank">星座分析师</a>
                <a  href="" target="_blank"></a>
            </div>
        </div>
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
    function c1(){
        <?php 
            if(!isset($_SESSION['username'])){
         ?>
         alert("未登录，请点击右上角登录!");
         return false;
            <?php 
            }
          ?>
        }
         function c(){
        <?php 
            if(isset($_SESSION['username'])){
         ?>
         var login_id=document.getElementById("login_id");
         login_id.innerHTML="已登录";
         login_id.href="";
         var img=document.getElementById("me1");
         img.src="../star_web/img/logined.png";
           <?php 
            }else{
          ?>
          var logout=document.getElementById("logout");
          logout.href="";
          <?php } ?>
        }
        window.onload=c;
        function c2(){
        <?php 
            if(!isset($_SESSION['admin'])){
         ?>
         alert("您不是管理员，请登录管理员账号!");
         <?php 
            }
          ?>
          return false;
        }
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


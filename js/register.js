                function check(){        
                        var username=myform.username.value;
                        if (username.length==0) {
                            alert("用户名必须输入！");
                            myform.username.focus();
                            return false;
                        }
                        if (username.length<3||username.length>12) {
                            alert("用户名长度在3-12字符之间！");
                            myform.username.focus();
                            return false;
                        }
                        var letters='!%^()?.,{}[]:;"+=*#$&';
                        for (var i = 0; i < username.length; i++) {
                        var ch=username.charAt(i);
                        if(letters.indexOf(ch)>-1){
                            alert("用户名包含非法字符！");
                            myform.username.focus();
                            return false;
                        }
                    }
                        var pwd=myform.password.value;
                        if (pwd.length==0) {
                            alert("密码必须输入！");
                            myform.password.focus();
                            return false;
                        }  
                        var flag1=false;
                        var flag2=false;
                        var numbers='0123456789';
                        for (var i = 0; i < pwd.length;i++) {
                        var ch=pwd.charAt(i);
                        if (numbers.indexOf(ch)>-1) {
                            flag1=true;
                            break;
                        }
                    }   
                        var abc='abcdefghijklmnopqrstuvwxyz';
                        for (var i = 0; i < pwd.length;i++) {
                        var ch=pwd.charAt(i);
                        if (abc.indexOf(ch)>-1) {
                            flag2=true;
                            break;
                        }
                    }
                        if (flag1==true&&flag2==true) {
                        }
                        else {
                            alert("密码必须含数字和字母！");
                            myform.password.focus();
                            return false;
                        }
                        var repwd=myform.repassword.value;
                        if (repwd.length==0) {
                            alert("确认密码必须输入！");
                            myform.repassword.focus();
                            return false;
                        } 
                        if (pwd!=repwd) {
                            alert("密码和确认密码不一致！");
                            myform.repassword.focus();
                            return false;
                        }
                        var unum=myform.unum.value;
                        if (unum.length==0) {
                            alert("注册邮箱/手机号必须输入！");
                            myform.unum.focus();
                            return false;
                        }           
                        var email=/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/;
                        var phone=/^[1][2|3|4|5|6|7|8|9][0-9]{9}$/gi;
                        if(email.test(unum)||phone.test(unum)){
                            return true;
                        }
                        else{
                            alert("账号请输入正确格式！");
                            myform.unum.focus();
                            return false;
                        }
                }
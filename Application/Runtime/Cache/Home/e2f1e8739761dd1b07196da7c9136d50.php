<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>欢迎访问浙江大学学生街在线平台</title>
    <style type="text/css">
        h1 {
            background-color: #094871;
            color: #F5EEE8;
            font-size: 35px;
        }

        body {
            background-color: #A8D9F9;
        }
    </style>
    <script type="text/javascript">
        function checkForm() {
            if (document.registerForm.username.value == "") {
                alert('请输入用户名');
                document.registerForm.username.focus();
                return false;
            }
            if (document.registerForm.password.value == "") {
                alert('请输入密码');
                document.registerForm.password.focus();
                return false;
            }
            if (document.registerForm.name.value == "") {
                alert('请输入名字');
                document.registerForm.name.focus();
                return false;
            }
            if (document.registerForm.phonenumber.value == "") {
                alert('请输入手机号码');
                document.registerFrom.phonenumber.focus();
                return false;
            }
        }
    </script>
</head>
<body>
    <center>
        <h1>浙江大学学生街在线平台</h1>
    </center>
    <iframe name="sinaWeatherTool" src="http://weather.news.sina.com.cn/chajian/iframe/weatherStyle32.html?city=%E6%9D%AD%E5%B7%9E" width="166" height="152" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe>
    <form action="/zju_culturestreet/index.php/Home/Index/register" target='_self' id="registerForm" method="post" name="registerForm" onsubmit="return checkForm();">
        <center>
            <table width=" 400" border="1">
                <tr>
                    <td align="center"><h2>用户名</h2></td>
                    <td align="center"><input type="text" class="inputtext" placeholder="请输入用户名" name="username" id="username" tabindex="1"></td>
                </tr>
                <tr>
                    <td align="center"><h2>密码</h2></td>
                    <td align="center"><input type="password" class="inputtext" placeholder="请输入密码" name="password" id="password" tabindex="2"></td>
                </tr>
                <tr>
                    <td align="center"><h2>名字</h2></td>
                    <td align="center"><input type="text" class="inputtext" placeholder="请输入你的名字" name="name" id="name" tabindex="2"></td>
                </tr>
                <tr>
                    <td align="center"><h2>手机号码</h2></td>
                    <td align="center"><input type="text" class="inputtext" placeholder="请输入手机号码" name="phonenumber" id="phonenumber" tabindex="2"></td>
                </tr>
            </table>
            <br />
            <br />
            <button tabindex="4" type="submit" id="login_button" style="width:80px">注册</button>
            <br />
            <br />
            <a href="login.html">返回登录</a>
        </center>
    </form>
</body>
</html>
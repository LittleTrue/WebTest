<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="zh-cn">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登陆</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
   

    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>
<style>
body{
	background: #ddd
}
.loginwarrp{
	margin: 250px auto;
    width: 400px;
    padding: 30px 50px;
    background: #FFFFFF;
    overflow: hidden;
    font-size: 14px;
    font-family: '΢���ź�','��Ȫ������','����';
}
.loginwarrp .logo{
	width:100%;
	height:44px;
	line-height: 44px;
	font-size: 20px;
	text-align: center;
	border-bottom:1px solid #ddd;
}
.loginwarrp .login_form{
	margin-top: 15px;
}
.loginwarrp .login_form .login-item{
	padding: 2px 8px;
	border:1px solid #dedede;
	border-radius: 8px;
	margin-top: 10px;
}
.loginwarrp .login_form .login_input{
	height: 35px;
    border: none;
    line-height: 35px;
    width: 200px;
    font-size: 14px;
    outline: none;
}
.loginwarrp .login_form .verify{
	float: left;
}
.loginwarrp .verify .verify_input{
	width: 160px;
}
.loginwarrp .verifyimg{
	height: 30px;
    margin: 20px 0 0 20px;
}
.loginwarrp .login-sub{
	text-align: center;
}
.loginwarrp .login-sub input{
	margin-top:15px;
    background: #45B549;
    line-height: 35px;
    width: 150px;
    color: #FFFFFF;
    font-size: 16px;
    font-family: '΢���ź�','��Ȫ������','����';
    border: none;
    border-radius: 5px;
}
.loginwarrp .login_form .login-item .error{
	color: #F00;
	font-family: '΢���ź�','��Ȫ������','����';
}
</style>
<script>
$(document).ready(function(){
    $("#login-form").submit(function(e){
        e.preventDefault();
        var email = $("#email").val();
        var password = $("#password").val();
        $.post("/WEBworkplace/Thinkphp/home/login/check_user",
            {
                email:email,
                password:password
            },
            function(data,status){
                if(status == "success"){
                    var content = data.content;
                    if(data.status == 0){
                        $("#action-messages").html(content);
                    }else{
                        $("#action-messages").html(content);
                    }
                }
            });
    });
});

</script>
<body>
<div id="main">
    <div id="login-container">
        <form id="login-form" class="form-horizontal" action="" method="post" onsubmit="return checklogin();" >
            <h2>Log in</h2>
            <div id="action-messages"></div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email:</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" id="email" name="email" placeholder="Email" />
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Password:</label>
                <div class="col-sm-9">
                    <input class="form-control" placeholder="Password" type="password" id="password" name="password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9 col-xs-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </div>
        </form>
    <div>
</div>

</body>
</html>
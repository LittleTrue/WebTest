<?php if (!defined('THINK_PATH')) exit();?><html>  
    <head>用户登录</head>  
    <!-- //post提交数据给login.php中的check函数，action会直接在URL中添加checkin并成功访问 -->
    <form name="Form" method="post" action="checkin" >  
        <p>邮箱：guo@qq.com</p>
        <p>密码：123456</p>
    <p>  
    <label for="email" class="label">邮箱:</label>  
    <input id="email" name="email" type="text" class="input" />  
    <p/>  
    <p>  
    <label for="password" class="label">密 码:</label>  
    <input id="password" name="password" type="password" class="input" />  
    <p/>  
    <p>  
    <input type="submit" name="submit"  class="left" />  
    </p>  
    </form>  
    </html>
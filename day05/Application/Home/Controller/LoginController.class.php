<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {

    function index(){
        //显示登陆网页
          $this->display(); 
    }

    public function checkin(){
        //使用GET接受URL地址栏的数据
        //  $email=$_GET['email'];
        //  $password=$_GET['password'];
        
        //使用POST接受html中form表单中的数据
        $email = $_POST['email'];
        $password = $_POST['password'];
  

        //用户字符数组user接收信息并作为查询中转条件
        $user['email']=$email;
        $user['password']=$password;
       
        //返回的字符数组
        $User = M("User"); // 实例化User对象
        $date=$User->where($user)->find();

        if($date){
            //定义返回数据
            $ret_date['status']=0;
            $ret_date['content']="登录成功";
        }
        else{
            $ret_date['status']=1;
            $ret_date['content']="登录失败，不正确的密码或者邮箱";
        }
        //以json返回数据
        $this->ajaxReturn($ret_date);
     }
}
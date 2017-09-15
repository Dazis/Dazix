<?php
namespace app\index\controller;

use \think\Session;

class Login extends \think\Controller
{
    public function index()
    {
       return $this->fetch('index');
    }
    public function login_add(){
    	Session::set('name','123');
        $this->success('登陆成功,有效期一个小时', 'Index/page1');
    }
}

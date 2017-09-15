<?php
namespace app\index\controller;

class Userinfo extends \think\Controller
{
    //列表
    public function userList()
    {
    	return $this->fetch('userList');
    }
    //添加用户
    public function user_add(){
    	return $this->fetch('user_add');
    }
}

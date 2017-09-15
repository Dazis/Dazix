<?php
namespace app\index\controller;
use think\Session;
use app\index\model\Health; // 加载model层
use app\index\model\Health_category; // 加载model层
header('content-type:text/html;charset=utf-8');
class Product extends \think\Controller
{
    public function __construct(){
        parent::__construct();
        $session = Session::get('name');
        if($session==""){
            $this->error('请先登录', 'Login/index');
        }
    }
}

<?php
namespace app\index\controller;
use app\index\model\Collections; // 加载model层
use think\Session;
class Collection extends \think\Controller
{
        public function __construct(){
        parent::__construct();
        $session = Session::get('name');
        if($session==""){
            $this->error('请先登录', 'Login/index');
        }
    }
    public function show(){
        $model = new Collections;
        $res = $model -> show();
        $this->assign('res', $res);
        return $this->fetch('show');
    }
    public function del(){
        $id = input('id');
        $model = new Collections;
        $res = $model -> del($id);
        if($res){
            echo json_encode(array('status'=>1, 'res'=>$res));
        }else{
            echo json_encode(array('status'=>0, 'res'=>$res));
        }
    }
}
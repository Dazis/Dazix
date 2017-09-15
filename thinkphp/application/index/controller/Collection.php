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
        $count = count($res);   // 总条数
        $length = 2;    // 每页显示条数
        $size = ceil($count/$length);   // 总也数
        $page = isset($_GET['page']) ? $_GET['page'] : 1 ;
        $limit = ($page-1) * $length;
        $info = array_slice($res, $limit, $length); 
        $s = 1;
        $shang = $page -1 < 1 ? 1 : $page -1 ;
        $xia = $page +1 > $size ? $size : $page +1;
        $ss = $size; 
        $this->assign('s', $s);
        $this->assign('shang', $shang);
        $this->assign('xia', $xia);
        $this->assign('ss', $ss);
        $this->assign('info', $info);
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
<?php
namespace app\index\controller;

use app\index\Model\Photos; // 加载model层
header('content-type:text/html;charset=utf-8');
class Photo extends \think\Controller
{
    public function show(){
        $model = new Photos;
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
        $this->assign('info', $info);       return $this->fetch('show');
    }
    public function add(){
        return $this->fetch('add');
    }
    public function add_do(){
        $title = input('title');
        $file = request()->file('img');
        // $file[0]->rule('uniqid')->move("http://47.93.229.109/upload/");
        // print_r($file[0]);die;
        if(empty($file)){
            $this->success('未选择图片', 'add');
        }else if(count($file) < 4){
         $this->success('上传图片不足4张', 'add');
        }
        foreach ($file as $keys => $value) {
            $img = $value->move(ROOT_PATH . 'public' . DS . 'uploads');
            $imgname[] = $img->getSaveName();
        }
        $model = new Photos;
        $res = $model -> add_do($title, $imgname);
        if($res){
            $this->success('提交成功', 'show');
        }else{
            $this->success('提交失败', 'add');
        }
        
    }
    public function update_zt(){
        $id = input('id');
        $opt = input('opt');
        $model = new Photos;
        $res = $model -> update_zt($id, $opt);

        if($res == 1){
            echo json_encode(array('status'=>1));
        }else if($res == 2){
            echo json_encode(array('status'=>2));
        }else{
            echo json_encode(array('status'=>0));
        }
    }
    public function del(){
        $id = input('id');
        $model = new Photos;
        $res = $model -> del($id);
        if($res){
            echo json_encode(array('status'=>1, 'res'=>$res));
        }else{
            echo json_encode(array('status'=>0, 'res'=>$res));
        }
    }
}

<?php
namespace app\index\controller;

use app\index\Model\Photos; // 加载model层
class Photo extends \think\Controller
{
    public function show(){
    	$model = new Photos;
    	$res = $model -> show();
    	$this->assign('res', $res);
    	return $this->fetch('show');
    }
    public function add(){
    	return $this->fetch('add');
    }
    public function add_do(){
    	$title = input('title');
    	$file = request()->file('img');
    	if(empty($file)){
            $this->success('未选择图片', 'add');
        }else if(count($file) < 4){
        	$this->success('上传图片不足4张', 'add');
        }
        foreach ($file as $keys => $value) {
        	$img[] = $value->move(ROOT_PATH . 'public' . DS . 'uploads');
        }
        foreach ($img as $key => $val) {
    		$imgname[] = $val->getSaveName();
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
        if($res){
            echo json_encode(array('status'=>1));
        }else{
            echo json_encode(array('status'=>0));
        }
    }
}

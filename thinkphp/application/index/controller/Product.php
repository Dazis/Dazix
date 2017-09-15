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
    //产品管理列表
    public function pro_list(){
        $model = new Health;
        $res = $model -> pro_list();
        // print_r($res);die;
        $this->assign('res', $res);
        return $this->fetch('pro_list');
    }
    //添加产品
    public function product_add(){
        $model = new Health_category;
        $res = $model -> product_add();
        $this->assign('res', $res);
        return $this->fetch('product_add');
    }
    public function product_add_do(){
        $title = input('title');
        $intro = input('intro');
        $content = input('content');
        $id = input('id');
        if(empty($id)){
            $this->success('未选择所属分类', 'product_add');
        }
        $file  = request()->file('img');
        if(empty($file)){
            $this->success('未选择图片', 'product_add');
        }
        $img = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        $imgname = $img->getSaveName();
        $model = new Health;
        $res = $model -> product_add_do($title, $intro, $content, $id, $imgname);
        if($res){
            $this->success('提交成功', 'pro_list');
        }else{
            $this->success('提交失败', 'product_add');
        }
        
    }
    //产品分类列表
    public function type_list(){
        return $this->fetch('type_list');
    }
    //添加分类
    public function product_type_add(){
        return $this->fetch('product_type_add');
    }
}

<?php
namespace app\index\controller;

use \app\index\model\Article_type;
use \app\index\model\Article;

class Product extends \think\Controller
{
    //产品管理列表
    public function pro_list(){
        $model  = new Article();
        $data   = $model->selOrder();
        $page   = $data->render();
    	$count  = $model->count();
        $counts = "";
        foreach ($count as $k=>$v) {
            $counts = $v['count(id)'];
        }
        foreach ($data as $k=>$v) {
            if ($v['comment'] == '1') {
                $v['comment'] = "可评论";
            } else {
                $v['comment'] = "不可评论";
            }
        }
        foreach ($data as $k=>$v) {
            if ($v['status'] == '1') {
                $id = $v['id'];
                $v['status'] = "<span class='label label-success radius' urls=$id>已发布</span>";
                $v['ss']     = 'picture_stop(this,id)';
                $v['img']    = '&#xe6de;';
            } else {
                $id = $v['id'];
                $v['status'] = "<span class='label label-defaunt radius' urls=$id>已下架</span>";
                $v['ss']     = 'picture_start(this,id)';
                $v['img']    = '&#xe603;';
            }
        }
        $this->assign('count',$counts);
        $this->assign('data',$data);
        $this->assign('page', $page);
        return $this->fetch('pro_list');
    }
    //确定要下架吗？
    public function picture_stop(){
        $request  = \think\Request::instance();
        $id       = $request->post('id');
        $model    = new Article();
        $data     = $model->upSts($id);
        return '1';
    }
    //确定要上架吗？
    public function picture_start(){
        $request = \think\Request::instance();
        $id      = $request->post('id');
        $model   = new Article();
        $data    = $model->upStss($id);
        return '1';
    }
    //删除文章
    public function del_article(){
        $request = \think\Request::instance();
        $id      = $request->post('id');
        $model   = new Article();
        $del     = $model->del($id);
        return $del;
    }
    //产品分类列表
    public function type_list(){
        $data = new Article_type();
        $data = $data->sel();
        $res  = $this->digui($data);
        $this->assign('res',$res);
    	return $this->fetch('type_list');
    }
    //添加产品
    public function product_add(){
        $model = new Article_type;
        $res   = $model->sel();
        $data  = $this->digui($res);
        $this->assign('data',$data);
        return $this->fetch('product_add');
    }
    //新闻文章入库
    public function product_add_do(){
        $request = \think\Request::instance();
        $data    = $request->post();
        $file    = request()->file('image');
        $model   = new Article();
        $res     = $model->add($data,$file);
        if ($res) {
            $this->success('添加成功', 'Product/pro_list');
        } else {
            $this->success('添加失败', 'Product/pro_list');
        }
    }
    //添加分类
    public function product_type_add(){
        $model = new Article_type();
        $model = $model->selFather();
        $this->assign('model',$model);
        return $this->fetch('product_type_add');
    }
    public function product_type_do(){
        $request = \think\Request::instance();
        $data    = $request->post();
        $model   = new Article_type();
        $res     = $model->addChindren($data);
        if ($res) {
            $this->success('添加成功', 'Product/type_list');
        }
    }
    public function digui($list,$pid = 0,$nbsp = ''){
            static $data =array();
            foreach($list as $v){
                if ($pid == $v['p_id']) {
                    $v['nbsp']=$nbsp;
                    $data[] = $v;
                    $this->digui($list,$v['id'],$nbsp . '-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
            }
        }
        return $data;
    }
}

<?php
namespace app\index\controller;
use app\index\model\Collections; // 加载model层

class Collection extends \think\Controller
{
    public function show(){
    	$model = new Collections;
    	$res = $model -> show();
    	$this->assign('res', $res);
    	return $this->fetch('show');
    }
}

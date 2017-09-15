<?php 
namespace app\index\model;

class Health_category extends \think\Model{
    public function product_add(){
    	$model = new Health_category;
    	$res = $model->select();
    	return $res;
    }
}
 ?>
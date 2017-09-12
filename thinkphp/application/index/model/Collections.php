<?php 
namespace app\index\model;
header('content-type:text/html;charset=utf-8');
class Collections extends \think\Model{
    public function show(){
        $res = db('collection')->select();
        return $res;
    }
}
 ?>
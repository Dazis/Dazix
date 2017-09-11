<?php
namespace app\index\controller;

class Collection extends \think\Controller
{
    public function show(){
    	return $this->fetch('show');
    }
}

<?php
namespace app\index\controller;

class Photo extends \think\Controller
{
    public function show(){
    	return $this->fetch('show');
    }
}

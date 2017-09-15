<?php
namespace app\index\controller;

use \think\Controller;

class Jurisdiction extends Controller
{	
    public function role(){
        return $this->fetch('role');
    }
    public function role_add(){
    	return $this->fetch('role_add');
    }
    public function jsdt(){
        return $this->fetch('jsdt'); 
    }
    
    public function jsdt_add(){
    	return $this->fetch('jsdt_add');
    }

    public function amstt(){
        return $this->fetch('amstt'); 
    }
    //管理员添加角色
    public function amstt_role(){
        return $this->fetch('amstt_role');
    }
    //角色添加权限
    public function role_jsdt(){
        return $this->fetch('role_jsdt');
    }
    public function amstt_add(){
        return view('Jurisdiction/amstt_add');
    }
    public function role_jsdt_add(){
        return view('Jurisdiction/role_jsdt_add');
    }

}

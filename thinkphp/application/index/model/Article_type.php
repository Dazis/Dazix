<?php
namespace app\index\model;

use think\Model;
use think\DB;

class Article_type extends Model
{
	protected $table='article_type';
	public function add($data){
		$user           = new User;
		$user->nickname    = $data['unae'];
		$user->password    = $data['upwd'];
		$user->phone       = $data['tel'];
		$user->identity    = $data['identity'];
		$user->realname    = $data['realname'];
		$user->save();
		return $user;
	}
	//查询父级分类
	public function selFather(){
		$data = DB::query("select * from article_type where p_id = '0' AND statue='1'");
		return $data;
	}
	//查询所有
	public function sel(){
		
		$data = DB::query("select * from article_type");
		return $data;
	}
	//添加子级分类
	public function addChindren($datas){
		$user               = new Article_type;
		$user->type_name    = $datas['type_name'];
		$user->p_id         = $datas['type_id'];
		$user->add_time     = time();
		$user->statue       = '0';
		$user->save();
		return $user;
	}
}

?>
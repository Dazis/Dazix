<?php
namespace app\index\model;

use think\Model;
use think\DB;
use \think\Session;

class Article extends Model
{
	protected $table='article';
	public function add($data,$file){
		$img = "";
		if (!empty($file)) {
			$info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        	if($info){
          	    $img = '/thinkphp'.'/public'.'/uploads'.'/'. $info->getSaveName();
          	     $img = str_replace("\\","/",$img);	
        	}else{
           		 $img="";
        	}
		} else {
			$img="";
		}
			$uname = Session::get('name');
			// echo $uname;die;
        	$user               = new Article;
        	$user->uname        = $uname;
			$user->title        = $data['title'];
			$user->brief_title  = $data['brief_title'];
			$user->type_id      = $data['type_id'];
			$user->order_num    = $data['order_num'];
			$user->comment      = isset($data['comment']) ? "1" : "0";
			$user->article_kwd  = $data['article_kwd'];
			$user->add_time     = date("Y-m-d H:i:s");
			$user->status       = '0';
			$user->image        = $img;
			$user->message      = $data['message'];
			$user->save();
			return $user;
	}
	public function selOrder(){
		$data = Article::order('order_num ASC')->paginate(3);
		// $data = DB::query("select * from article ORDER BY order_num ASC");
		return $data;
	}
	//修改上下架状态
	public function upSts($id){
		$data = DB::query("update article set status='0' where id='$id'");
		return $data;
	}
	public function upStss($id){
		$data = DB::query("update article set status='1' where id='$id'");
		return $data;
	}
	//count总数
	public function count(){
		$data = DB::query('select count(id) from article');
		return $data;
	}
	//删除
	public function del($id){
		$data = DB::query("delete from article where id ='$id'");
		return $data;
	}
	//搜索
	public function searchs($data){
		$sel = DB::query("select * from article where title like '%$data%'; ");
		// $list = Article::where("title LIKE '%$data%'")->paginate(5);
		return $sel;
	}
}

?>
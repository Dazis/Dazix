<?php 
namespace app\index\model;

class Health extends \think\Model{
    public function pro_list(){
        $model = new Health;
    	$res = $model->alias('health')->join('health_category id','health_category.id=health.type_id')->select();
    	return $res;
    }
    public function product_add_do($title, $intro, $content, $id, $imgname){
    	$arr = array(
    		'title' =>$title,
    		'img' =>$imgname,
    		'intro' =>$intro,
    		'content' =>$content,
    		'type_id' =>$id,
    		'created_time' => date('Y-m-d H:i:s')
    	);
    	$res = db('Health')->insert($arr);
    	return $res;
    }
}
 ?>
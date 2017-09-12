<?php 
namespace app\index\model;

class Photos extends \think\Model{
    public function show(){
        $res = db('figure')->select();
        return $res;
    }
    public function add_do($title, $imgname){
    	$arr = array(
    		'title' =>$title,
    		'img' 	=>$imgname[0],
    		'imgtwo' 	=>$imgname[1],
    		'imgthree' 	=>$imgname[2],
    		'imgfour' 	=>$imgname[3],
            'created_time' => date('Y-m-d H:i:s')
    	);
    	$res = db('figure')->insert($arr);
    	return $res;
    }
    public function update_zt($id,$opt){
        if($opt == 0){
            $opt = 1;
        }else if($opt == 1){
            $opt = 0;
        }
        $ids = array('id'=>$id);
        $arr = array('status' => $opt);
        $res = db('figure')->where($ids)->update($arr);
        return $res;
    }
}
 ?>
<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App\Models\Article_type;
use App\Models\Article;
use App\Models\Test;
class TestController extends BaseController
{
    public function index(){
    	$model = new Test();
    	$res = $model -> index();
    	return view('layouts.retrieval');
    }
    public function show(){
    	$Article_type = new Article_type();
    	$data = $Article_type->sel();
    	$data = json_encode($data);
    	$data = json_decode($data,true);

    	$ser = $Article_type->selChind($data);
    	$ser = json_encode($ser);
    	$ser = json_decode($ser,true);
        $arr=array();
    	foreach($ser as $k=>$v){
    		foreach($data as $ks=>$vs){
    			if($vs['id']==$v['p_id']){
                    $data[$ks]['rz'][]=$v;
    			}
    		} 
    	}
        $Article = new Article();
        $article = $Article->sel();
        $article = json_encode($article);
        $article = json_decode($article,true);
    	return view('layouts.index',['data'=>$data,'article'=>$article]);
    }
      public function digui($list,$pid = 0,$nbsp = ''){
            static $data =array();
            foreach($list as $v){
                if ($pid == $v['p_id']) {
                    $v['nbsp']=$nbsp;
                    $data[] = $v;
                    $this->digui($list,$v['id'],$nbsp . '-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
            }
        }
        return $data;
    }

}

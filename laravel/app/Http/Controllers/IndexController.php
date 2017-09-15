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
use Illuminate\Support\Facades\Input;

class IndexController extends BaseController
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
    public function article_list(){
        $id = Input::get('id');
        $Article = new Article();
        $data = $Article->selOne($id);
        // print_r($data[0]->message);die;
         // print_r($data);die;
        return view('layouts.content',compact('data'));
    }
    public function type_list(){
        $id = Input::get('id');
        $Article_type = new Article_type();
        //取标题
        $tname = $Article_type->selTite($id);
        $tname = $tname[0]->type_name;
        //取十条
        $ten = $Article_type->getten();
        //取文章
        $article = new Article();
        $rest = $article->getArticle($id);
        return view('layouts.type',compact('tname', 'ten','rest'));
    }
    // public function 

}

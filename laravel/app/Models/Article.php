<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Article extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
    /**
     * [index description]  // 方法描述
     * @return [type] [description] // 返回说明
     */
    public function sel(){
        $sel = DB::select('select * from article where status=1');
        return $sel;
    }
    public function getArticle($id){
        $sel = DB::select("select * from article where type_id = $id AND status=1");
        return $sel;
    }
    public function selOne($id){
        $sel = DB::select("select * from article where id = $id");
        // print_r($sel);die;
        $num = $sel[0]->num+1;
        $up = DB::update("update article set num=$num where id=$id");
        return $sel;
    }
}

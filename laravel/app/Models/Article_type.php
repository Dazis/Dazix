<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Article_type extends Model
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
        $sel = DB::select('select * from article_type where p_id=0');
        $user = DB::table('article_type')->where('p_id', '0')->get();
        return $user;
    }
    public function selChind($data){
        $res = DB::select("select * from article_type where p_id!=0");
        return $res;
    }
    public function selTite($id){
        $data = DB::select("select type_name from article_type where id=$id");
        return $data;
    }
    public function getten(){
        $data = DB::select('select type_name,id from article_type ORDER BY num desc LIMIT 10');
        return $data;
    }
}

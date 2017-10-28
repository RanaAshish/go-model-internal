<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SinglePost extends Model
{
    //

    protected $table = "user_post";






    public function user(){


        return  $this->belongsTo('App\User', 'user_id','id');
    }


    public function comments(){

    	return $this->hasMany('App\Model\PostComment','user_id','id');
    }

    public function dateWithFormat($pattern){
    	
    	//'2017-01-04 00:00:00'
    	$date = date_create_from_format('Y-m-d H:i:s',$this->created_at);
    	return date_format($date,$pattern);
    }

    protected function truncateString($str, $chars, $to_space, $replacement="...") {

   	if($chars > strlen($str)) return $str;

	   $str = substr($str, 0, $chars);
	   $space_pos = strrpos($str, " ");
	   if($to_space && $space_pos >= 0) 
	       $str = substr($str, 0, strrpos($str, " "));

	   return($str . $replacement);
	}


	public function shortBlog(){


		return $this->truncateString($this->post_content,282,false,' ...');
	}
}

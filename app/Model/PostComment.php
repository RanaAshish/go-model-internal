<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Traits\FormatDates;

class PostComment extends Model
{
    //
	use FormatDates;
	
    protected $table = "post_comment";




    function user(){

    	return  $this->belongsTo('App\User', 'user_id','id');
    }
}

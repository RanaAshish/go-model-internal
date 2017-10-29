<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //

	protected $postNumber = 5;

	//protected $data = 40;

	public function __construct(){

		
        \App::setLocale(\Request::segment(1));
	}

    public function index(){


    	//$posts

    	$this->data['posts'] = \App\Model\SinglePost::where('post_status','active')->where('admin_status',1)->paginate($this->postNumber);

    	return view('blog.index',$this->data);
    	
    }

    public function singlePost($lang,$id){

    	
    	$this->data['post'] = \App\Model\SinglePost::find($id);

    	
    	return view('blog.single-post',$this->data);
    }



}

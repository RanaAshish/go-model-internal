<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModelController extends Controller
{
    //

    public function profile($lang){


    	return view('model.profile');

    }

    public function register($lang){

    	return view("model.register");
    }

      public function model_prize($lang){

    	return view("model.model_prize");
    }
}

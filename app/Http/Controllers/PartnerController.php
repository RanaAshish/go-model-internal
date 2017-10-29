<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerController extends Controller
{
    //

    public function register($lang){

    	return view("partner.register");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
class ModelController extends Controller
{
    public function profile($lang){
    	return view('model.profile');
    }

    public function register($lang){
    	return view("model.register");
    }

    public function save_register($lang,Request $request){
      $message = [
        'username.required' => 'Username is required.',
        'email.required' => 'Email is required.',
        'email.unique' => 'This email is alreday taken.',
        'password1.required' => 'Password is required.',
        'password2.required' => 'Confirm password is required.',
        'password2.same' => 'Confirm password must be match with password.',
        
      ];
      $validator = Validator::make($request->all(), [
          'username' => 'required',
          'email' => 'required|unique:users',
          'password1' => 'required',
          'password2' => 'required|same:password1',
      ],$message);
      if ($validator->fails()) { 
        return redirect($lang.'/model/register')->withErrors($validator)->withInput();
      }else{
        $user = new User;
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password1);
        $user->role = 4;
        $user->user_status = "active";
        $user->save();
        $request->session()->flash('success', 'Model registered successfully');
        return redirect($lang.'/model/register');
      }
    }
    
    public function model_prize($lang){
    	return view("model.model_prize");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Illuminate\Support\Facades\Mail;


class ModelController extends Controller
{
    public function profile($lang){
    	return view('model.profile');
    }


    // Load register view for model role
    public function register($lang){
    	return view("model.register");
    }

    // Perform registration actio and send email to user
    public function save_register($lang,Request $request){

      // validation messages
      $message = [
        'username.required' => 'Username is required.',
        'email.required' => 'Email is required.',
        'email.unique' => 'This email is alreday taken.',
        'password1.required' => 'Password is required.',
        'password2.required' => 'Confirm password is required.',
        'password2.same' => 'Confirm password must be match with password.',
        
      ];

      // Validation rules
      $validator = Validator::make($request->all(), [
          'username' => 'required',
          'email' => 'required|unique:users',
          'password1' => 'required',
          'password2' => 'required|same:password1',
      ],$message);
      if ($validator->fails()) {  // Check validation
        return redirect($lang.'/model/register')->withErrors($validator)->withInput();
      }else{

        // Insert user into database
        $user = new User;
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password1);
        $user->role = 4;
        $user->user_status = "inactive";
        $user->save();

        // Create slug for activate link
        $timestamp = time();
        $data = array(
            'name' => $request->username,
            'link' => url('/').'/confirm_account/'.$timestamp.$timestamp*2*$user->id
        );

        // send email
        $email = $request->email;
        Mail::send('emails.welcome', $data, function ($message) use ($email) {
            $message->from('hu.ashish.rana@gmail.com', 'Work scout');
            $message->to($email)->subject('Registration successfull');
        });

        $request->session()->flash('success', 'Model registered successfully');
        return redirect($lang.'/model/register');
      }
    }
    
    public function model_prize($lang){
    	return view("model.model_prize");
    }
}

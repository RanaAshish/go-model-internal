<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Illuminate\Support\Facades\Mail;

class PartnerController extends Controller
{

    // Load register view for model role
    public function register($lang){
    	return view("partner.register");
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
        return redirect($lang.'/partner/register')->withErrors($validator)->withInput();
      }else{

        // Insert user into database
        $user = new User;
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password1);
        $user->role = 3;
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
            $message->from('support@go-models.com', 'go-models');
            $message->to($email)->subject('Registration successfull');
        });

        $request->session()->flash('success', 'Partner registered successfully');
        return redirect($lang.'/partner/register');
      }
    }

    // Activate account if link is proper
    public function confirm_account($slug,Request $request){
        $time = substr($slug,0,10);
        $remain_slug = substr($slug, 10);

        $id = $remain_slug/($time * 2);

        $user = User::find($id);

        if(isset($user) && !empty($user)){
            $user->user_status = "active";
            $user->save();

            $request->session()->flash('success', 'Account activated successfully');
            return redirect('en/partner/register');
        } else {
            echo "Invalid URL";
        }
    }
}

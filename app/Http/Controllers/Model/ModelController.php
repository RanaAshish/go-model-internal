<?php

namespace App\Http\Controllers\Model;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Validator;
use Illuminate\Support\Facades\Mail;
use App\Model\UserProfile;

class ModelController extends Controller {

	/**
	 * Load register view for model role
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getRegister() {
		return view( "model.register" );
	}

	/**
	 * Perform registration actio and send email to user
	 *
	 * @param Request $request
	 *
	 * @return $this
	 */
	public function postRegister( Request $request ) {

		$this->validate( $request, [
			'name'  => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|min:6|confirmed',
		] );

		// Insert user into database
		$user              = new User;
		$user->name        = $request->input('name');
		$user->email       = $request->input('name');
		$user->password    = bcrypt( $request->input('password') );
		$user->user_status = "inactive";
		$user->save();
		$user->assignRole( 'model' );

		// Create slug for activate link
		$timestamp = time();
		$data      = array(
			'name' => $request->username,
			'link' => url( '/' ) . '/confirm_account/' . $timestamp . $timestamp * 2 * $user->id
		);

		// send email
		$email = $request->email;
		Mail::send( 'emails.welcome', $data, function ( $message ) use ( $email ) {
			$message->from( 'support@go-models.com', 'go-models.com' );
			$message->to( $email )->subject( 'Registration successfull' );
		} );

		$request->session()->flash( 'success', 'Model registered successfully' );

		return redirect()->route('model.model.getRegister');
	}

	public function profile() {

		$this->data['user'] = User::find( 2 );
		//$user = \App\User::find(2);
		// dd($user->profile);
		return view( 'model.profile', $this->data );
	}


	public function update( Request $request, $type ) {

		switch ( $type ) {

			case "client-update":
				$result  = $request->input( 'object' );
				$profile = UserProfile::find( $result['profile_id'] );
				$profile->fill( $result );
				$profile->save();
				break;

		}

	}

	public function model_prize( $lang ) {
		return view( "model.model_prize" );
	}
}

<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$user01              = new User();
		$user01->name        = 'Khanh';
		$user01->email       = 'teogk89@gmail.com';
		$user01->password    = bcrypt( '123456' );
		$user01->profile_id  = 1;
		$user01->user_status = 'active';
		$user01->save();
		$user01->assignRole( 'admin' );

		$user02              = new User();
		$user02->name        = 'Jack London';
		$user02->email       = 'jack@gmail.com';
		$user02->password    = bcrypt( '123456' );
		$user02->profile_id  = 2;
		$user02->user_status = 'active';
		$user02->save();
		$user01->assignRole( 'user' );
	}
}

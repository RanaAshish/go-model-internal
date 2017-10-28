<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->insert([
        	'name'=>'Khanh',
        	'email'=>'teogk89@gmail.com',
        	'password'=>bcrypt('123456'),
        	'profile_id'=>1,
        	'role'=>1,
        	'user_status'=>'active'
        ]);


        DB::table('users')->insert([
        	'name'=>'Jack London',
        	'email'=>'jack@gmail.com',
        	'password'=>bcrypt('123456'),
        	'profile_id'=>2,
        	'role'=>2,
        	'user_status'=>'active'
        ]);
    }
}

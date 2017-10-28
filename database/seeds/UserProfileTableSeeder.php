<?php

use Illuminate\Database\Seeder;

class UserProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user_profile')->insert([
        	'id'=>1,
        	'avatar_path'=>'images/avatar/myav.jpg',
        	'address'=>'1 address'
        ]);

        DB::table('user_profile')->insert([
        	'id'=>2,
        	'avatar_path'=>'images/avatar/myav.jpg',
        	'address'=>'check address'
        ]);
    }
}

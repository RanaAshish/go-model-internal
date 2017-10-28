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
        	'address'=>'1 address',
            'go_code'=>'1',
            'first_name'=>'a',
            'last_name'=>'b'
        ]);

        DB::table('user_profile')->insert([
        	'id'=>2,
        	'avatar_path'=>'images/avatar/myav.jpg',
        	'address'=>'check address',
            'go_code'=>'2',
            'first_name'=>'c',
            'last_name'=>'d'
        ]);
    }
}

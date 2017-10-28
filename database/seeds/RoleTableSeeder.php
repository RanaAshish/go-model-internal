<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user_role')->insert([
        	'id'=>1,
        	'name'=>'admin',
        	'description'=>"Full privilege"
        ]);

        DB::table('user_role')->insert([
        	'id'=>2,
        	'name'=>'user',
        	'description'=>"Normal privilege"
        ]);
    }
}

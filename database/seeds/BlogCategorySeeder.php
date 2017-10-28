<?php

use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('post_category')->insert([
        	'id'=>1,
        	'name'=>'Tip and tricks'
        ]);

        DB::table('post_category')->insert([
        	'id'=>2,
        	'name'=>'Hobby'
        ]);
    }
}

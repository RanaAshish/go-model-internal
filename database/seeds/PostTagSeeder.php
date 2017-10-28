<?php

use Illuminate\Database\Seeder;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('post_tag')->insert([
        	'id'=>1,
        	'tag_content'=>'trick',
        	'post_id'=>1
        ]);

        DB::table('post_tag')->insert([
        	'id'=>2,
        	'tag_content'=>'trick',
        	'post_id'=>1
        ]);
    }
}

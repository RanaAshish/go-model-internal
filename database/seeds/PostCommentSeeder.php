<?php

use Illuminate\Database\Seeder;

class PostCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('post_comment')->insert([

        	'id'=>1,
        	'content'=>"Greate article",
        	'post_id'=>2,
            'user_id'=>1
        ]);
    }
}

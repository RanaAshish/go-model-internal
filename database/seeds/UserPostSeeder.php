<?php

use Illuminate\Database\Seeder;

class UserPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user_post')->insert([

        	'post_content'=>'<h1>Test</1h>',
        	'comment_status'=>'allowed',
        	'post_status'=>'active',
        	'post_title'=>'test ',
        	'category_id'=>1,
        	'admin_status'=>1,
        	'user_id'=>1
        ]);

        DB::table('user_post')->insert([

            'post_content'=>'<h1>Test 44</1h>',
            'comment_status'=>'allowed',
            'post_status'=>'active',
            'post_title'=>'test 222 ',
            'category_id'=>1,
            'admin_status'=>1,
            'user_id'=>1
        ]);

        DB::table('user_post')->insert([

            'post_content'=>'<h1>Test2</1h>',
            'comment_status'=>'allowed',
            'post_status'=>'active',
            'post_title'=>'test ',
            'category_id'=>1,
            'admin_status'=>1,
            'user_id'=>1
        ]);

        DB::table('user_post')->insert([

            'post_content'=>'<h1>Test</1h>',
            'comment_status'=>'allowed',
            'post_status'=>'active',
            'post_title'=>'test 222 ',
            'category_id'=>1,
            'admin_status'=>1,
            'user_id'=>1
        ]);

        DB::table('user_post')->insert([

            'post_content'=>'<h1>Test</1h>',
            'comment_status'=>'allowed',
            'post_status'=>'active',
            'post_title'=>'test 222 ',
            'category_id'=>1,
            'admin_status'=>1,
            'user_id'=>1
        ]);

        DB::table('user_post')->insert([

            'post_content'=>'<h1>Test</1h>',
            'comment_status'=>'allowed',
            'post_status'=>'active',
            'post_title'=>'test 222 ',
            'category_id'=>1,
            'admin_status'=>1,
            'user_id'=>1
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserProfileTableSeeder::class);
      
        $this->call(BlogCategorySeeder::class);
        $this->call(UserTableSeeder::class);
         

        $this->call(UserPostSeeder::class);
        $this->call(PostCommentSeeder::class);
        $this->call(PostTagSeeder::class);
    }
}

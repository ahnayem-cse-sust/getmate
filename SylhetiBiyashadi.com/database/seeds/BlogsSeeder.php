<?php

use App\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++){
            Blog::create([
                'user_id' => rand(),
                'title' => rand(),
                'thum_link' => rand(),
                'description' => rand()
            ]);
        }
    }
}

<?php

namespace Databsase\Seeders;

use App\Models\Category;
use App\Models\posts;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModalEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = Category::all();
        $users = User::all();

            for ($i = 1; $i <=20; $i++){
                posts::create([
                    'post_title' => "posts $i",
                    'category_id' => $categories->random()->id,
                    'post_content' => "This is the bode of the posts $i",
                    'user_id' => $users->random()->id,
                ]);
            }
    }
}
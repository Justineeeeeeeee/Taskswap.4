<?php

namespace Databsase\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModalEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = ['Mathematics','Natural Science','Social Sciences','Humanities','Computer Science',
        'Health Sciences','Education','Business and Economics','Fine Arts','Communication','Environmental Studies',
        'Law','Languages and Statistics','Architecture and Design'];

            foreach ($categories as $category) {
                Category::create([
                    'name' => $category,
                ]);
            }
    }
}
<?php
// database/seeders/ArticlesTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticlesTableSeeder extends Seeder
{
    public function run()
    {
        // Assuming you have a factory for the Article model, create 10 articles
        Article::factory()->count(10)->create();
    }
}

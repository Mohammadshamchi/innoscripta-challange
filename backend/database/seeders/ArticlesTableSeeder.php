<?php
// Example seeder file: database/seeds/ArticlesTableSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Article; // Make sure to create the Article model

class ArticlesTableSeeder extends Seeder
{
    public function run()
    {
        // Use model factories or insert directly
        Article::create([
            'title' => 'Sample Article',
            'description' => 'This is a sample article description.',
            'url' => 'http://example.com/article',
            'source' => 'Example Source',
            'published_at' => now(),
        ]);
        // Repeat as necessary...
    }
}

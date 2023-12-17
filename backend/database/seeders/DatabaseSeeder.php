<?php
// database/seeders/DatabaseSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Call other seeders here, like the ArticlesTableSeeder
        $this->call([
            ArticlesTableSeeder::class,
            // ... any other seeders
        ]);
    }
}

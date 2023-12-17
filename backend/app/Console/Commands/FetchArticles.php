<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Article;

class FetchArticles extends Command
{
    protected $signature = 'fetch:articles';
    protected $description = 'Fetch articles from external APIs and store them in the database';

    public function handle()
    {
        // Example URL - replace with actual API call
        $url = 'https://content.guardianapis.com/search?api-key=cdcaeb26-91ec-458b-b0a1-816d7e3c423a';

          $response = Http::get($url);

    if ($response->successful()) {
        $data = $response->json();
        $articles = $data['response']['results']; // Adjusted to match the response structure

        foreach ($articles as $articleData) {
            Article::create([
                'title' => $articleData['webTitle'], // Adjusted to 'webTitle'
                'content' => $articleData['webUrl'], // Assuming 'webUrl' as content
                // Map other fields as necessary
            ]);
        }

        $this->info('Articles fetched and stored successfully.');
    } else {
        $this->error('Failed to fetch articles.');
    }
}
    }

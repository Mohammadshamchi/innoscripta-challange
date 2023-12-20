<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Article;

// class FetchNewsAPIArticles extends Command
// {
//     protected $signature = 'fetch:newsapi';
//     protected $description = 'Fetch articles from NewsAPI';

//     public function handle()
//     {
//         // Place your API key in your .env file, like NEWSAPI_KEY=your_api_key
//         $apiKey = env('NEWSAPI_KEY');
//         $url = "https://newsapi.org/v2/top-headlines?apiKey={$apiKey}&country=us";

//         $response = Http::get($url);

//         if ($response->successful()) {
//             $data = $response->json();
//             $articles = $data['articles'];

//             foreach ($articles as $articleData) {
//                 Article::create([
//                     'title' => $articleData['title'],
//                     'url' => $articleData['url'] ?? null,

//                 ]);
//             }

//             $this->info('NewsAPI articles fetched and stored successfully.');
//         } else {
//             $this->error('Failed to fetch NewsAPI articles.');
//         }
//     }
// }

<?php
// app/Http/Controllers/ArticleController.php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Carbon\Carbon; // Make sure to import the Carbon class

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $query = Article::query();

        // Filter by keyword in title
        if ($request->has('keyword')) {
            $query->where('title', 'like', '%' . $request->keyword . '%');
        }

        // Date range filter
        if ($request->has('startDate') && $request->has('endDate')) {
            $startDate = Carbon::parse($request->startDate);
            $endDate = Carbon::parse($request->endDate);
            $query->whereBetween('created_at', [$startDate, $endDate]);
        }

        // Add other filters as needed, e.g., category, source

        $articles = $query->get();
        return response()->json($articles);
    }
}

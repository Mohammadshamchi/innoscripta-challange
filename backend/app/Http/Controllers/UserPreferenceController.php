<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPreferenceController extends Controller
{
public function update(Request $request)
    {
        $user = auth()->user();

        $user->preferred_sources = $request->input('preferred_sources', []);
        $user->preferred_categories = $request->input('preferred_categories', []);
        $user->preferred_authors = $request->input('preferred_authors', []);

        $user->save();

        return response()->json(['message' => 'Preferences updated successfully']);
    }

    public function get()
    {
        $user = Auth::user();
        return response()->json([
            'preferred_sources' => $user->preferred_sources,
            'preferred_categories' => $user->preferred_categories,
            'preferred_authors' => $user->preferred_authors
        ]);
    }
}

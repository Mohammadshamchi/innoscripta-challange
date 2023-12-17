<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function updatePreferences(Request $request)
    {
        $user = auth()->user();
        $user->preferred_sources = $request->input('preferred_sources');
        $user->preferred_categories = $request->input('preferred_categories');
        $user->preferred_authors = $request->input('preferred_authors');
        $user->save();

        return response()->json(['message' => 'Preferences updated successfully']);
    }

    public function getPreferences()
    {
        return response()->json(auth()->user()->only(['preferred_sources', 'preferred_categories', 'preferred_authors']));
    }
        public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            return response()->json([
                'message' => 'Login successful',
                'user' => Auth::user()
            ]);
        }

        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }
}

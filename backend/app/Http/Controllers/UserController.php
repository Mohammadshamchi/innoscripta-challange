<?php
namespace App\Http\Controllers;
use App\Models\User;
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
    $loginData = $request->validate([
        'email' => 'email|required',
        'password' => 'required'
    ]);

    if (!auth()->attempt($loginData)) {
        return response(['message' => 'Invalid Credentials'], 401);
    }

    $accessToken = auth()->user()->createToken('authToken')->accessToken;

    return response(['user' => auth()->user(), 'access_token' => $accessToken]);
}


public function register(Request $request) {
    $validatedData = $request->validate([
        'name' => 'required|max:55',
        'email' => 'email|required|unique:users',
        'password' => 'required|confirmed'
    ]);

    $validatedData['password'] = bcrypt($request->password);

    $user = User::create($validatedData);

    $accessToken = $user->createToken('authToken')->accessToken;

    return response(['user' => $user, 'access_token' => $accessToken]);
}


}

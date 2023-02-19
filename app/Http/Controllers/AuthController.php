<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Auth;
use App\Models\User;
class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validate user credentials
        $credentials = $request->only('email', 'password');
        if (!Auth::attempt($credentials)) {
            // Redirect user back with an appropriate error message
            return redirect()->back()->with('error', 'Invalid email/password combination');
        }
    
        // Allow user access
        return redirect()->route('home');
    }

    public function signup(Request $request)
{
    // Validate user credentials
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed',
    ]);

    // Create new user account
    $user = new User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = bcrypt($request->password);
    $user->save();

    // Login user and redirect them to the home page
    Auth::login($user);
    return redirect()->route('home');
}
}

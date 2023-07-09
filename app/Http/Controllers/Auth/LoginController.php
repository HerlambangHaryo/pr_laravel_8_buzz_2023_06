<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller; 
 
use Laravel\Fortify\Http\Requests\LoginRequest;

use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
   
use Laravel\Fortify\Rules\Password;

class LoginController extends AuthenticatedSessionController
{
    
    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', new Password],
        ], [
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'password.required' => 'Please enter your password.',
            'password' => 'The password format is invalid.',
        ]);
    }
    
    public function store(Request $request)
    {
        $this->validateLogin($request);

        if (!Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended('/Dashboard')->with('login', define_messages('login'));
    }

    protected function authenticated(Request $request, $user)
    {
        // Custom logic after successful authentication...

        return redirect()->intended('/Dashboard');
    }
}
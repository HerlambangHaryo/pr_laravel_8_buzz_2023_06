<?php

namespace App\Http\Controllers\Auth; 

use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LogoutController extends Controller
{
    /**
     * Log out account user.
     *
     * @return \Illuminate\Routing\Redirector
     */
    public function perform()
    {
        $user = auth()->user();    

        Session::flush();
        
        Auth::logout();

        // return Redirect::to('login'); 
        return Redirect()->route('login')->with('logout', define_messages('logout'));
    }
 
}
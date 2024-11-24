<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected function authenticated(Request $request, $user)
    {
        if ($user->usertype === 'admin') {
            // Redirect admin to the admin dashboard
            return view ('admin.home');
        }
    else{
        // Redirect regular user to the home page (or accueil)
        return view ('accueil');
    }

    }}

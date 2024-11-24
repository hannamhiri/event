<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Http\Controllers\Auth\User;
use App\Models\User as ModelsUser;

use Illuminate\Support\Facades\Mail;



class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Récupérer l'utilisateur avec l'email fourni dans la requête
         $user =ModelsUser::where('email', $request->email)->first();

    // Vérifier si l'utilisateur existe et s'il est bloqué
    if ($user && $user->is_blocked) {
        return back()->withErrors(['email' => 'Your account is blocked. Please contact the site administrator.']);

    }

        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
       
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/accueil');
    }
}

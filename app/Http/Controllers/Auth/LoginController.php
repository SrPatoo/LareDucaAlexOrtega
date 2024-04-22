<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Providers\RouteServiceProvider;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticación exitosa, redirige al usuario a donde desees
            return redirect()->intended('/dashboard');
        } else {
            // Autenticación fallida, vuelve al formulario de login con un mensaje de error
            return redirect()->back()->with('error', 'Credenciales incorrectas. Por favor, inténtalo de nuevo.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}

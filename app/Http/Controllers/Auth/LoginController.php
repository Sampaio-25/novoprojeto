<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Mostrar o formulário de login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Realizar login
    public function login(Request $request)
    {
        // Validar os dados do formulário
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Tentar fazer login
        if (Auth::attempt($request->only('email', 'password'))) {
            // Redirecionar para a tela inicial após login
            return redirect()->route('welcome');
        }

        // Se o login falhar, redirecionar de volta com erro
        return back()->withErrors([
            'email' => 'As credenciais informadas são inválidas.',
        ]);
    }

    // Realizar logout
    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}

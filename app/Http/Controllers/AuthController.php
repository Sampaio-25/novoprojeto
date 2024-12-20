<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // Exibir formulário de login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Processar login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/'); // Redireciona para a rota 'welcome'
        }

        return back()->withErrors(['login' => 'As credenciais estão incorretas.']);
    }

    // Exibir formulário de cadastro
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Processar cadastro
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Redirecionar para a página de login com uma mensagem de sucesso
        return redirect()->route('login')->with('success', 'Usuário cadastrado com sucesso!');
    }

    // Processar logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

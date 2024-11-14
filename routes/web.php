<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfessionalController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;

// Rota da tela principal da aplicação, tela de Bem-Vindo
Route::get('/', function () {
    return view('welcome');
})->middleware('auth'); // Protegendo a rota principal com middleware de autenticação

// Rota para a tela de login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);

// Rota para a tela de registro
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'register']);

// Rota de logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Rota que abre a tela de exibição dos profissionais
Route::get('/categories/{category}', [ProfessionalController::class, 'showByCategory'])->name('categories.show');

// Rota para listar todas as categorias
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

// Rota de cadastro de profissionais
Route::get('/professionals/register', [ProfessionalController::class, 'create'])->name('professionals.create');
Route::post('/professionals', [ProfessionalController::class, 'store'])->name('professionals.store');

// Rota para Politica de Privacidade
Route::get('/politicadeprivacidade', function () {
    return view('politicadeprivacidade');   // Rota para Politica de Privacidade
});





// Rota para exibir o perfil detalhado do profissional
Route::get('/professional/{id}', [ProfessionalController::class, 'show'])->name('professional.show');

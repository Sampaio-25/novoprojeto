<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfessionalController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/profissional', function () {
    return view('profissional');
});

Route::get('/politicadeprivacidade', function () {
    return view('politicadeprivacidade');
});

// Rota para buscar profissionais por categoria
Route::get('/categories/{category}', [ProfessionalController::class, 'showByCategory'])->name('categories.show');

// Rota para listar todas as categorias
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

// Rota de cadastro de profissionais
Route::get('/professionals/register', [ProfessionalController::class, 'create'])->name('professionals.create');
Route::post('/professionals', [ProfessionalController::class, 'store'])->name('professionals.store');


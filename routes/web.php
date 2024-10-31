<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfessionalController;
use App\Http\Controllers\SearchController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perfis', function () {
    return view('perfis');
});

Route::get('/profissional', function () {
    return view('profissional');
});

Route::get('/cliente', function () {
    return view('cliente');
});

// Rota para buscar profissionais por categoria
Route::get('/categories/{category}', [ProfessionalController::class, 'showByCategory'])->name('categories.show');

// Rota para listar todas as categorias
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

// Rota de cadastro de profissionais
Route::get('/professionals/register', [ProfessionalController::class, 'create'])->name('professionals.create');
Route::post('/professionals', [ProfessionalController::class, 'store'])->name('professionals.store');

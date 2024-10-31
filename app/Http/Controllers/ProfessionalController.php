<?php

// app/Http/Controllers/ProfessionalController.php
namespace App\Http\Controllers;

use App\Models\Professional;
use Illuminate\Http\Request;

class ProfessionalController extends Controller
{
    // Exibe os profissionais de uma categoria específica
    public function showByCategory($category)
    {
        $professionals = Professional::where('category', $category)->get();
        return view('professionals.index', compact('professionals', 'category'));
    }

    // Exibe o formulário de cadastro
    public function create()
    {
        return view('professionals.create');
    }

    // Armazena o profissional no banco de dados
    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'contact' => 'required|string|max:15'
        ]);

        // Criação do novo profissional
        Professional::create([
            'name' => $request->name,
            'city' => $request->city,
            'category' => $request->category,
            'contact' => $request->contact
        ]);

        return redirect('/')->with('success', 'Profissional cadastrado com sucesso!');

    }
}

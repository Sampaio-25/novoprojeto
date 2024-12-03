<?php

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
            'contact' => 'required|string|max:15',
            'description' => 'nullable|string',
            'photos' => 'nullable|array',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048' // Validação para fotos
        ]);


        if ($request->hasFile('photos')) {
            // Verifica se é um único arquivo ou um array de arquivos
            $uploadedPhotos = is_array($request->file('photos')) ? $request->file('photos') : [$request->file('photos')];

            foreach ($uploadedPhotos as $photo) {
                // Salva o caminho corrigido com barras normais
                $photos[] = str_replace('\\', '/', $photo->store('photos', 'public'));
            }
        }


        // Criação do novo profissional
        Professional::create([
            'name' => $request->name,
            'city' => $request->city,
            'category' => $request->category,
            'contact' => $request->contact,
            'description' => $request->description,  // Armazena a descrição
            'photos' => json_encode($photos), // Armazena as fotos como um JSON (caso existam)
        ]);

        // Redireciona para a página inicial com uma mensagem de sucesso
        return redirect('/')->with('success', 'Profissional cadastrado com sucesso!');
    }

    // Exibe o perfil de um profissional
    public function show($id)
    {
        $professional = Professional::findOrFail($id);  // Encontra o profissional pelo ID
        return view('professionals.show', compact('professional'));  // Passa os dados do profissional para a view
    }
}

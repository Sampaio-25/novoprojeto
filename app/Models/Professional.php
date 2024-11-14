<?php

// app/Models/Professional.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    use HasFactory;

    // Defina as colunas que podem ser preenchidas
    protected $fillable = [
        'name',
        'category',
        'city',
        'contact',
        'description',
        'photos',  // Campo para fotos
    ];

    // Adicione qualquer relacionamento necessário aqui
}


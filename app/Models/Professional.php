<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    use HasFactory;

    // Adicione as colunas que você deseja preencher
    protected $fillable = [
        'name',
        'category',
        'contact',
    ];
}

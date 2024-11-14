<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * As rotas que devem ser excluídas da verificação CSRF.
     *
     * @var array
     */
    protected $except = [
        // Adicione aqui as rotas que você quer excluir da verificação de CSRF, se necessário.
        // Por exemplo: '/alguma-rota', '/outra/rota'
    ];
}

<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        "/articulos", "/articulos/*" /* CSRF Token, para passar el "Autentificador / verificador de Usuario" en Postman. CRUD - 17.05.2021 - jpm
    ];
}

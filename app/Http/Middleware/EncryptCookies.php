<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array
     */
    protected $except = [
        //
        'XDEBUG_SESSION',
        'pma_lang',
        'pmaUser-1',
        'pmaAuth-1',
        'phpMyAdmin'
    ];
}

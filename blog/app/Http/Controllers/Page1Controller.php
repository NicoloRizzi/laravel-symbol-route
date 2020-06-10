<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page1Controller extends Controller
{
    /**
     * SHOW A PAGE TEST
     */
    public function index() {
        return 'Pagina di Test';
    }
}

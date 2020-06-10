<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * RETURN A VIEW FOR INDEX CONTACTS PAGE
     */
    public function index() {
        return view('contacts.index');
    }
}

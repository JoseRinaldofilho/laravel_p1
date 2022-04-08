<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index()
    {
        echo "Olá mundo! principal";
        // return view('principal');
    }
}

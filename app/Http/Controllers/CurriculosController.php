<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurriculosController extends Controller
{
    public function index()
    {
        return view('curriculo.curriculo');
    }
}

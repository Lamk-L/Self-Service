<?php

namespace App\Http\Controllers\compras;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function index(Request $request)
    {
        
        return view('compras.comprar.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class FormularioController extends Controller
{
    public function salvaTabela(Request $request)
    {
        return Formulario::create($request->all());
    }

    public function index(Request $request)
    {
        return Formulario::all();
    }
    
    public function show($id)
    {
        return Formulario::find($id);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Linguagem;
use App\Models\Teste;
use Illuminate\Http\Request;

class LinguagemController extends Controller
{
    public function index()
    {

        return Linguagem::all();

    }

    public function store(Request $request)
    {
        return Linguagem::create($request->all());
    }


    public function delete($id)
    {
        Linguagem::destroy($id);
    }

}

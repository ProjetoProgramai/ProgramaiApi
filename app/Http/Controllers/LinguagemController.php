<?php

namespace App\Http\Controllers;

use App\Models\Linguagem;
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

    public function update(int $id,Request $request)
    {

        $linguagem = Linguagem::find($id);
        $linguagem->fill($request->all());
        $linguagem->save();

        return $linguagem;
    }


    public function delete($id)
    {
        Linguagem::destroy($id);
    }

}

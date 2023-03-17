<?php

namespace App\Http\Controllers;

use App\Models\Linguagem;
use Illuminate\Http\Request;

class MatematicaController extends Controller
{
    public function retornaAlgo($teste)
    {
        return $teste;
    }

    public function somaAlgo(Request $request)
    {
        return $request->all();
    }

    public function somaAlgoNovo(Request $request)
    {
        $var1 = $request['var1'];
        $var2 = $request['var2'];

        return $var1 + $var2;
    }
}

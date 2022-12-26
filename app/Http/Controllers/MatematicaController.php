<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

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
    
        return $var1+$var2;
    }

    // teste pra ver como isso interage (paulo ricardo)
    public function media4valores(Request $request)
    {
        $var1 = $request['var1'];
        $var2 = $request['var2'];
        $var3 = $request['var3'];
        $var4 = $request['var4'];

        $soma = $var1 + $var2 + $var3 + $var4;

        return $soma / 4;

    }

}

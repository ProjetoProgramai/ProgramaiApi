<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class TesteController extends BaseController
{
    //controlador de teste simples
    public function teste()
    {
        return 'teste funcionando :)';
    }
}

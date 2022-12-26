<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Formulario extends Model
{

    use SoftDeletes;

    protected $fillable =[
        'nome',
        'email',
        'telefone',
        'data_de_nascimento',
        'descriçao'
    ];
    protected $table = 'formularios';

}

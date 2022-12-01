<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Linguagem extends Model
{

    use SoftDeletes;

    protected $fillable =['nome'];
    protected $table = 'linguagens';

}

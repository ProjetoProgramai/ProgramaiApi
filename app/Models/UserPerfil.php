<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserPerfil extends Model
{

    use SoftDeletes;

    protected $fillable =['classificacao', 'user_id'];
    protected $table = 'user_perfis';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

// github

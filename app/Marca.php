<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $fillable=[
        'nombre_marca','slug','body'

    ];
}

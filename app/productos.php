<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    //
    protected $fillable = ['nombre', 'precio', 'empresa'];
}

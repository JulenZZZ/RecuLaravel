<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $table = 'calculos';
    protected $fillable = [
        'dividiendo', 'divisor', 'resultado',
    ];


}

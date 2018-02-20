<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpcaoPonto extends Model
{
    protected $fillable = [
        'nome',
        'status'
    ];
}

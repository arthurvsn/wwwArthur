<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroPonto extends Model
{
    protected $fillable = [
        'data_ponto',
        'hora_ponto',
        'id_tipo_opcao_ponto',
        'id_usuario'
    ];
}

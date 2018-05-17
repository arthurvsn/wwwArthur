<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroPonto extends Model
{
    protected $primaryKey = 'id_registros_ponto';

    protected $fillable = [
        'data_ponto',
        'hora_ponto',
        'id_tipo_opcao_ponto',
        'id_usuario',
        'remember_token',
    ];
}

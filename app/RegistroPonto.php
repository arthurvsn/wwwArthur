<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public function getRelatorio($idUsuario)
    {
        $relatorio = DB::table('registro_pontos as rp')
            ->join('opcao_pontos as op', 'op.id_opcao_pontos', '=', 'rp.id_tipo_opcao_ponto')
            ->select('rp.data_ponto', 'rp.hora_ponto', 'op.nome')
            ->where('rp.id_usuario', '=', $idUsuario)
            ->get();

        return $relatorio;
    }
}

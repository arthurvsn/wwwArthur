<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class OpcaoPonto extends Model
{
    protected $fillable = [
        'nome',
        'status'
    ];

    protected $primaryKey = 'id_opcao_pontos';

    public function getOpcaoPontoById($id)
    {
        $opcoesPonto = DB::table('opcoes_pontos')
            ->where('id_opcao_pontos', '=', $id)
            ->get();

        return $opcoesPonto;
    }

    public function getOpcoesByStatus($status = "A")
    {
        $opcoesPonto = DB::table('opcao_pontos')
            ->select('id_opcao_pontos', 'nome')
            ->where('status', '=', $status)
            ->get();

        return $opcoesPonto;
    }
}

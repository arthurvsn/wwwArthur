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
        $sql = "SELECT op.nome,
                       op.id_opcao_pontos,
                       op.status
                  FROM opcao_pontos op
                 WHERE op.id_opcao_pontos = {$id}";
        
        $opcoesPonto = DB::select($sql);
        return $opcoesPonto;
    }

    public function getOpcoesByStatus($status = "A")
    {
        $sql = "SELECT op.nome,
                       op.id_opcao_pontos
                  FROM opcao_pontos op
                 WHERE op.status = '{$status}'";
        
        $opcoesPonto = DB::select($sql);
        return $opcoesPonto;
    }
}

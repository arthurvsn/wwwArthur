<?php

namespace App\Util;

final class Util
{
    public static function formataData2Db($data) 
    {
        $array_data = explode("/", $data);
        $dia = $array_data[0];
        $mes = $array_data[1];
        $ano = $array_data[2];
        $newData = $ano.'-'.$mes.'-'.$dia;

        return $newData;
    }
}
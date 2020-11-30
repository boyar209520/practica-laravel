<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function calcular($monto, $porcentaje){
        $resultado = ($monto * $porcentaje) / 100;
        return $resultado; 
    }
}


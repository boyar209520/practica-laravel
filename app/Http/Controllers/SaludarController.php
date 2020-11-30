<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludarController extends Controller
{
    public function saludo($numeroUsuario,$nombre = 'Anónimo'){
        echo "ID Del Usuario: " .$numeroUsuario; 
        echo "<br>";
        echo "Nombre Del Usuario: " .$nombre;
    }
}

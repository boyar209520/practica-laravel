<?php

namespace App\Http\Controllers;


use App\Producto;

class ProductoController extends Controller
{


    //devolver todos los productos

    public function get(){

        $productos = Producto::all();
        return response()->json($productos);
    }
    
    
    //devolver el producto seleccionado con el parametro
    public function buscar($nombreProducto) {
        
        $productos = Producto::all();

        for($i = 0; $i<count($productos); $i++){

            $producto = $productos[$i];

            if($nombreProducto == $producto['nombre']){

                return response()->json($producto);
            }
        }
       
    }



    //agregar nuevo producto

    public function agregar($nombreNuevo, $nuevoPrecio, $fraccionamiento){
        
        $producto = new Producto;

        $producto->nombre = $nombreNuevo;

        $producto->precio = $nuevoPrecio;

        $producto->fraccionamiento = $fraccionamiento;

        $producto->save();
    }


    //modificar el nombre de un elemento

    public function modificar($productoAModicar, $nombre){
        
        //usar where('active', 1)->first();

        $producto = Producto::find($pAm);

        $producto->nombre = $nombre;

        $producto->save();
    }

    //eliminar el producto seleccionado

    public function eliminar($eliminarProducto){
        $a = $eliminarProducto;
        
        for($i = 0; $i<count($this->productos); $i++){
            
            $contando = var_export ($this->productos[$i]);
            if($a == $contando['nombre']){
                unset($contando[$a]);
            }
            
            
        }
        return response()->json($contando);
        
    }




    /*
    $producto = $this->productos[$i];
            if($a == $producto['nombre']){
                echo "Bien";
                unset($producto[$a]);

                
            }
    */
}

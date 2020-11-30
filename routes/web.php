<?php
// use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo/{nombre}/{apellido}', function ($nombre, $apellido) {
    echo "Hola " .$nombre. " " .$apellido;
});

Route::get('/saludo', function ($nombre, $apellido) {
    echo "Hola " .$nombre. " " .$apellido. " es ruta nueva";
});
//Ejercicio 1
Route::get('facturas/{monto}/{porcentaje}', "UserController@calcular");

//Ejercicio 2

Route::get('personas/{numeroUsuario}/{nombre?}', "SaludarController@saludo");

// Desarrollar API
//get
Route::get('producto', "ProductoController@get");

//buscar
Route::get('producto/{nombreProducto}', "ProductoController@buscar");

//agregar
Route::get('producto/nuevo/{nuevoProducto}/{nuevoPrecio}/{fraccionamiento}', "ProductoController@agregar");

//modificar
Route::get('producto/modificar/{productoAModificar}/{nombre}', "ProductoController@modificar");

//Eliminar
Route::get('producto/eliminar/{eliminarProducto}', "ProductoController@eliminar");

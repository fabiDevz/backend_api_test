<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/modelos/{marca_id}','App\Http\Controllers\ModeloController@modelosPorMarca');
Route::get('/dispositivos/marcas/{marca_id}','App\Http\Controllers\DispositivoController@dispositivosPorMarca');
Route::get('/dispositivos/modelos/{modelo_id}','App\Http\Controllers\DispositivoController@dispositivosPorModelo');
Route::get('/dispositivos/bodegas/{bodega_id}','App\Http\Controllers\DispositivoController@dispositivosPorBodega');

Route::get('/bodegas', 'App\Http\Controllers\BodegaController@index');
Route::get('/marcas', 'App\Http\Controllers\MarcaController@index');
Route::get('/modelos', 'App\Http\Controllers\ModeloController@index');
Route::get('/dispositivos', 'App\Http\Controllers\DispositivoController@index');

Route::get('/bodegas/{bodega_id}/marcas' ,  'App\Http\Controllers\BodegaController@listaMarcas');
Route::get('/bodegas/{bodega_id}/modelos' ,  'App\Http\Controllers\BodegaController@listaModelos');
Route::get('/bodegas/{bodega_id}/modelos/{marca_id}', 'App\Http\Controllers\BodegaController@listarModelosPorMarca' );
Route::get('/bodegas/{bodega_id}/dispositivos/marcas/{marca_id}', 'App\Http\Controllers\DispositivoController@listarDispositivosPorMarca' );
Route::get('/bodegas/{bodega_id}/dispositivos/modelos/{modelo_id}', 'App\Http\Controllers\DispositivoController@listarDispositivosPorModelo') ;
Route::get('/bodegas/{bodega_id}/dispositivos', 'App\Http\Controllers\DispositivoController@listarDispositivosPorBodega');

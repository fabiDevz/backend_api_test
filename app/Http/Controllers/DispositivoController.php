<?php

namespace App\Http\Controllers;

use App\Models\Dispositivo;
use App\Models\Modelo;
use Illuminate\Http\Request;

class DispositivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dispositivos = Dispositivo::all();
        return response() -> json($dispositivos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function listarDispositivosPorMarca($bodega_id, $marca_id)
    {
        $listaDispositivosPorBodega = Dispositivo::where('bodega_id', $bodega_id)->get();
        $listaModelosPorMarca = Modelo ::where('marca_id', $marca_id)->get();
     
        $listaDispositivosPorMarca = collect();

        foreach($listaDispositivosPorBodega as $dispositivo)
        {
            foreach($listaModelosPorMarca as $modelos)
            {
                if($modelos -> id == $dispositivo -> modelo_id)
                {
                    $listaDispositivosPorMarca -> push($dispositivo);
                }
            }
        }
       

        return response()->json($listaDispositivosPorMarca);
    
    }
    
    public function listarDispositivosPorModelo($bodega_id,$modelo_id)
    {
        $listaDispositivosPorBodega = Dispositivo::where('bodega_id', $bodega_id)->get();
        $listaDispositivosPorModelo = Dispositivo::where('modelo_id', $modelo_id)->get();
        $listaFiltrada = collect();

        foreach($listaDispositivosPorBodega as $dispositivoB)
        {
            foreach($listaDispositivosPorModelo as $dispositivoM )
            {
                if($dispositivoB->id == $dispositivoM -> id)
                {
                    $listaFiltrada->push($dispositivoB);
                }
            }
        }
        return response()->json($listaFiltrada);
    }

    public function listarDispositivosPorBodega($bodega_id)
    {
        $dispositivos = Dispositivo::where('bodega_id', $bodega_id) -> get();
        return response()-> json ($dispositivos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dispositivo  $dispositivo
     * @return \Illuminate\Http\Response
     */
    public function show(Dispositivo $dispositivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dispositivo  $dispositivo
     * @return \Illuminate\Http\Response
     */
    public function edit(Dispositivo $dispositivo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dispositivo  $dispositivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dispositivo $dispositivo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dispositivo  $dispositivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dispositivo $dispositivo)
    {
        //
    }
}

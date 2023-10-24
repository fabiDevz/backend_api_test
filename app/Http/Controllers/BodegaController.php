<?php

namespace App\Http\Controllers;

use App\Models\Bodega;
use App\Models\Marca;
use App\Models\Dispositivo;
use App\Models\Modelo;
use Illuminate\Http\Request;

class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bodegas = Bodega::all();
        return response()-> json($bodegas);
      
    }

    public function listarModelosPorMarca($bodega_id, $marca_id)
    {
        $dispositivos = Dispositivo::where('bodega_id', $bodega_id)->get();
        $modelosColeccion = collect(); // Crea una colección vacía para los modelos
        $listaModelos = collect();

        foreach ($dispositivos as $dispositivo) {
        // Agrega el modelo a la colección
            $modelosColeccion->push($dispositivo->modelo);
            }
            $modelosUnicos = $modelosColeccion->unique();

        foreach ($modelosUnicos as $modelo)
        {
            if($modelo -> marca_id == $marca_id)
            {
                $listaModelos->push($modelo);
            }
        }
            return response()-> json($listaModelos);
    }

    public function index_dispositivos($request)
    {
        //
        $dispositivos = Dispositivo::all();
        return response()-> json($dispositivos);
    }

    public function listaModelos($bodega_id)
    {
        $dispositivos = Dispositivo::where('bodega_id', $bodega_id)->get();
        $listaModelos = Modelo::all();
        $listaModelosPorBodega = collect();
      

        foreach($dispositivos as $dispositivo)
        {
            foreach($listaModelos as $modelo)
            {
                if($dispositivo->modelo_id == $modelo -> id)
                {
                    $listaModelosPorBodega -> push($modelo);
                }
            }
        }

        
        $modelosUnicos = $listaModelosPorBodega->unique();

        return response()-> json ($modelosUnicos);
    }
    
    public function listaMarcas($bodega_id)
    {
        $dispositivos = Dispositivo::where('bodega_id', $bodega_id)->get();
        $listaMarcas = Marca::all();
        $listaModelos = Modelo::all();
        $listaModelosPorBodega = collect();
      
        $listaMarcasPorBodega = collect();

        foreach($dispositivos as $dispositivo)
        {
            foreach($listaModelos as $modelo)
            {
                if($dispositivo->modelo_id == $modelo -> id)
                {
                    $listaModelosPorBodega -> push($modelo);
                }
            }
        }

        foreach($listaModelosPorBodega as $modelo)
        {
            foreach($listaMarcas as $marca)
            {
                if($marca -> id == $modelo-> marca_id)
                {
                    $listaMarcasPorBodega -> push($marca);
                }
            }
        }
        $marcasUnicas = $listaMarcasPorBodega->unique();

        return response()-> json ($marcasUnicas);
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function show(Bodega $bodega)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function edit(Bodega $bodega)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bodega $bodega)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bodega $bodega)
    {
        //
    }

    
}

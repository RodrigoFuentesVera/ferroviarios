<?php

namespace App\Http\Controllers\Finanzas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Anio;
use App\Models\Integrante\Integrante;

class RegistrarCuotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registrar()
    {      
        $anios = Anio::orderBy('anio')->get();
        $integrantes = Integrante::orderBy('nombre_integrante')
                                    ->orderBy('apellido_paterno_integrante')
                                    ->orderBy('apellido_materno_integrante')
                                    ->where('vigencia_integrante',1)
                                    ->get();
        return view('finanzas.cuotas.registrar',compact('anios', 'integrantes'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

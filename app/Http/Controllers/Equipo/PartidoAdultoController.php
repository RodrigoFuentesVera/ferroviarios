<?php

namespace App\Http\Controllers\Equipo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Equipo\Partido;
use App\Models\Admin\Equipo;

class PartidoAdultoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anioActual = now()->year;
        $equipos = Equipo::get();
        $partidosOf = Partido::orderBy('fecha_partido')
                            ->where('id_categoria',1)
                            ->where('oficial',1)
                            ->whereYear('fecha_partido',$anioActual)
                            ->get();
        foreach($partidosOf as $par){
            foreach($equipos as $eq){
                if($par->id_equipo_local == $eq->id_equipo){
                    $par->equipo_local = $eq->equipo;
                }
                if($par->id_equipo_visita == $eq->id_equipo){
                    $par->equipo_visita = $eq->equipo;
                }
            }
        }
        $partidosNof = Partido::orderBy('fecha_partido')
                            ->where('id_categoria',1)
                            ->where('oficial',0)
                            ->whereYear('fecha_partido',$anioActual)
                            ->get();
        foreach($partidosNof as $par){
            foreach($equipos as $eq){
                if($par->id_equipo_local == $eq->id_equipo){
                    $par->equipo_local = $eq->equipo;
                }
                if($par->id_equipo_visita == $eq->id_equipo){
                    $par->equipo_visita = $eq->equipo;
                }
            }
        }
        return view('equipo.adulto.partido.index',compact('partidosOf','partidosNof'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        $equipos = Equipo::orderby('equipo')
                        ->where('id_categoria',1)
                        ->get();
        return view('equipo.adulto.partido.crear',compact('equipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
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

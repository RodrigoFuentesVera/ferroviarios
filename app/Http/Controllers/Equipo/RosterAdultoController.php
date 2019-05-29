<?php

namespace App\Http\Controllers\Equipo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Integrante\Integrante;
use Carbon\Carbon;
use App\Models\Admin\Posicion;

class RosterAdultoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadores = Integrante::orderBy('nombre_integrante')
                                    ->orderBy('apellido_paterno_integrante')
                                    ->orderBy('apellido_materno_integrante')
                                    ->where('vigencia_integrante',1)
                                    ->whereIn('id_categoria',[1,4])
                                    ->where('compite_torneo',1)
                                    ->get();
        $jugadoresNo = Integrante::orderBy('nombre_integrante')
                                    ->orderBy('apellido_paterno_integrante')
                                    ->orderBy('apellido_materno_integrante')
                                    ->where('vigencia_integrante',1)
                                    ->whereIn('id_categoria',[1,4])
                                    ->where('compite_torneo',null)
                                    ->get();
        
        $posiciones = Posicion::get();
        
        $num = 0;
        foreach($jugadores as $jug){
            $jug->edad = Carbon::createFromDate($jug->fecha_nacimiento_integrante)->age;
            $jug->num = $num+1;
            $num ++;
            foreach($posiciones as $pos){
                if($jug->id_posicion_1 == $pos->id_posicion){
                    $jug->posicion_1 = $pos->posicion;
                }
                if($jug->id_posicion_2 == $pos->id_posicion){
                    $jug->posicion_2 = $pos->posicion;
                }
            }
        }
        $numNo = 0;
        foreach($jugadoresNo as $jug){
            $jug->edad = Carbon::createFromDate($jug->fecha_nacimiento_integrante)->age;
            $jug->num = $numNo+1;
            $numNo ++;
            foreach($posiciones as $pos){
                if($jug->id_posicion_1 == $pos->id_posicion){
                    $jug->posicion_1 = $pos->posicion;
                }
                if($jug->id_posicion_2 == $pos->id_posicion){
                    $jug->posicion_2 = $pos->posicion;
                }
            }
        }
        return view('equipo.adulto.roster.index',compact('jugadores','jugadoresNo'));
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

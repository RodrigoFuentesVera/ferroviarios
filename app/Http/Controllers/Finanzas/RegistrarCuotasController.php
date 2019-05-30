<?php

namespace App\Http\Controllers\Finanzas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Anio;
use App\Models\Integrante\Integrante;
use App\Models\Admin\Mes;
use App\Models\Finanzas\Cuota;
use Illuminate\Support\Arr;

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
        $meses = Mes::orderBy('id_mes')->get();
        $cuotas = Cuota::orderBy('id_mes')
                        ->where('id_anio',5)
                        ->where('id_integrante',65)
                        ->get();
        $integrantes = Integrante::orderBy('nombre_integrante')
                                    ->orderBy('apellido_paterno_integrante')
                                    ->orderBy('apellido_materno_integrante')
                                    ->where('vigencia_integrante',1)
                                    ->get();

        foreach($meses as $mes){
            foreach($cuotas as $cuota){
                if(!$this->existeCuota($mes, $cuotas)){
                    $mes->pagado = false;
                }else{
                    $mes->pagado = true;
                }
            }
        }
        return view('finanzas.cuotas.registrar',compact('anios', 'integrantes', 'meses','cuotas'));
    }

    public function existeCuota($mes, $cuotas){
        foreach($cuotas as $cuota){
            if($mes->id_mes == $cuota->id_mes){
                return true;
            }
        }
        return false;
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
    public function guardar(Request $request,$id_mes, $id_anio, $id_integrante)
    {
        if ($request->ajax()) {
            $cuota = Cuota::where('id_anio',$id_anio)
                            ->where('id_mes',$id_mes)
                            ->where('id_integrante',$id_integrante)
                            ->get();
            if($cuota->isEmpty()){
                $cuotaInsert = new Cuota;
                $cuotaInsert->id_anio = $id_anio;
                $cuotaInsert->id_mes = $id_mes;
                $cuotaInsert->id_integrante = $id_integrante;
                $cuotaInsert->monto_pago = 6000;
                $cuotaInsert->fecha_pago = now();
                if($cuotaInsert->save()){
                    return response()->json(['mensaje' => 'insert']);
                }else{
                    return response()->json(['mensaje' => 'nok']);
                }
            }else{
                Cuota::where('id_anio',$id_anio)
                    ->where('id_mes',$id_mes)
                    ->where('id_integrante',$id_integrante)
                    ->delete();
                return response()->json(['mensaje' => 'delete']);
            }
        }else{
            abort(404);
        }
        
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

<?php

namespace App\Http\Controllers\Seguridad;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Perfil;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session()->get('cantidad_perfiles') > 1){
            $perfiles = session()->get('perfiles');
            return view('seguridad.perfil')->with('perfiles', $perfiles);
        }else{
            return view('seguridad.perfil');
        }
        
    }

    public function perfil(Request $request)
    {
        $id = $request->id;
        $perfil = Perfil::where('id',$id)->get();
        session()->put('perfil_nombre',$perfil[0]->nombre_perfil);
        return redirect('inicio');
        
    }

}

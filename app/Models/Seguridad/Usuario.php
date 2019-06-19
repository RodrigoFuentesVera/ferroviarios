<?php

namespace App\Models\Seguridad;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Admin\Perfil;
use Illuminate\Support\Facades\Session;
use App\Models\Integrante\Integrante;

class Usuario extends Authenticatable
{
    protected $primary_key = 'id_usuario';
    protected $remember_token = 'false';
    protected $table = 'usuario';
    protected $fillable = ['nombre_usuario', 'password', 'id_integrante', 'vigencia'];
    
    public function perfiles(){
        return $this->belongsToMany(Perfil::class, 'usuario_perfilado');
        //dd($this->belongsToMany(Perfil::class, 'usuario_perfilado'));
    }

    private function integrante($rut){
        return Integrante::where('rut_integrante', $rut)->get();
    }

    public function setSession($perfiles){
        
        $integrante = $this->integrante($this->nombre_usuario);

        if(count($perfiles) == 1){
            Session::put([
                'cantidad_perfiles' => 1,
                'perfil_id' => $perfiles[0]['id'],
                'perfil_nombre' => $perfiles[0]['perfil'],
                'nombre_usuario' => $this->nombre_usuario,
                'nombre_integrante' => $integrante[0]['nombre_integrante'] . " " . $integrante[0]['apellido_paterno_integrante']
            ]);
        }else{
            Session::put([
                'cantidad_perfiles' => count($perfiles),
                'perfiles' => $perfiles,
                'nombre_usuario' => $this->nombre_usuario,
                'nombre_integrante' => $integrante[0]['nombre_integrante'] . " " . $integrante[0]['apellido_paterno_integrante']
            ]);
        }
    }

}

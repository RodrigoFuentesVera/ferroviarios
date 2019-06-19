<?php

namespace App\Http\Middleware;

use Closure;

class PermisoPresidente
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($this->permiso()){
            return $next($request);
        }else{
            return redirect('/')->with('error','No tiene permiso para entrar a esta página');
        }
        
    }

    private function permiso(){
        return session()->get('nombre_perfil') == 'Presidente';
    }
}

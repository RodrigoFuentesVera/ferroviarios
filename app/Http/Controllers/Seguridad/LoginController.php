<?php

namespace App\Http\Controllers\Seguridad;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/perfil';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('seguridad.index');
    }

    protected function authenticated(Request $request, $user){
        $perfiles = $user->perfiles()->get();
        if($perfiles->isNotEmpty()){
            $user->setSession($perfiles->toArray());
        }else{
            $this->guard()->logout();
            $request->session()->invalidate();
            return redirect('login')->withErrors(['error'=>'Este usuario no tiene un perfil asignado.']);
        }

    }

    public function username()
    {
        return 'nombre_usuario';
    }

    
}

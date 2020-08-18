<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout', 'bienvenido');
    }

    public function index()
    {
        return view('Login.index');
    }

    public function clave()
    {
        return view('Login.Clave.index');
    }

    public function recuperar()
    {
        
    }

    protected function authenticated(Request $request, $user)
    {   
        if ($user->flestado == 1) {
 
            $user->setSession($user);
 
        } else {
            $this->guard()->logout();
            $request->session()->invalidate();
            return redirect('/')->withErrors(['status' => '¡Lo sentimos! Credenciales no válidas.']);
        }
    }

    public function username()
    {
        return 'usuario';
    }     
 
    public function bienvenido()
    {
         if(session()->get('perfil_id') == 1){
 
             return view('Perfil1.Dashboard.index');
 
         }else if(session()->get('perfil_id') == 2){
             
             return view('Perfil2.Dashboard.index');
         }
    }
    
}


<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\User;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class userController extends Controller
{
    public function  store(){

        


       

        //Se agregan los datos a la base de datos
       $user =  User::create([

            'name' =>request('nombre'),
            'email' => request('email'),
            'puesto' =>request('puesto'),
            'planta' => request('planta'),
            'password' => bcrypt(request('password'))

        ]);

            // Iniciar sesión automáticamente
        Auth::login($user);

        // Redirigir al dashboard
        return redirect()->route('dashboard_usuario');
    }





    public function login(){




        $credenciales = [                                                                                                
            'email' => request('email'),
            'password' =>request('password')
        ];



        
        if(Auth::attempt($credenciales)){
            request()->session()->regenerate();
            return redirect()->route('dashboard_usuario');
        }
        else{
            return back()->with('login_fail', 'El usuario o la contraseña son incorrectas, verifica por favor');
        }


    }



    public function pedido(){




        if(request('negra')==null && request('amarilla') == null && request('azul') == null && request('rosa')==null ){

            return request();
        }


        else{

      


        //Esto obtiene el ID del usuario que tiene la session abierta
        $id_usuario = Auth::user()->id;

        //Esto me guarda una copia de la imagen en mi carpeta public, acceso a esta carpeta mediante el php artisan storage:link
        $imagen = request()->file('foto_tanques')->store('public');




        Pedido::create([
            'name' => Auth::user()->name,
            'puesto' => Auth::user()->puesto,
            'numero' => request('numero_tinta'),
            'negra' => request('negra'),
            'amarilla' => request('amarilla'),
            'azul' => request('azul'),
            'rosa' => request('rosa'),
            'foto_tanques' => $imagen,
            'user_id' =>  $id_usuario
          ]);


          return back()->with('enviado', 'Tu pedido fue enviado');
    }

}

    public function index_login(){


        $usuarios = User::all();

        return view('usuario.login', compact('usuarios'));

    }



}
                           
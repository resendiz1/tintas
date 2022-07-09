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

        //Recibo el email y lo guado en la variable con el mismo nombre
        $email = substr(md5(request('email')),0,8);

        //Encripto el los primeros 8 caracteres del MD5 del email
        $password_encriptada = Hash::make($email);


       

        //Se agregan los datos a la base de datos
        User::create([
            'name' =>request('nombre'),
            'email' => request('email'),
            'puesto' =>request('puesto'),
            'planta' => request('planta'),
            'password' => $password_encriptada
        ]);

        return back()->with('success', 'El usuario fue creado');
    }





    public function login(){

       // $credenciales = request()->only('email', 'password');
       //La contraseña debe ir en texto plano y se encripta al momento de irla a comparar
       //Obvio aqui no va en texto plano, la encripte en MD5 para que no se den cuenta que estoy usando su correo como contraseña XD


        Hash::make('password');
       
        $credenciales = [                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
            'email' => request('email'),
            'password' =>request('password')
        ];




        //Hash encripta las contraseñas de laravel para no guardarlas en texto plano
        if(Auth::attempt($credenciales)){
            request()->session()->regenerate();
            return redirect()->route('dashboard_usuario');
        }
        else{
            return 'No funciona una mierda';
        }


    }



    public function pedido(){

        //Esto obtiene el ID del usuario que tiene la session abierta
        $id_usuario = Auth::user()->id;

        //Esto me guarda una copia de la imagen en mi carpeta public, acceso a esta carpeta mediante el php artisan storage:link
        $imagen = request()->file('foto_tanques')->store('public');




        //configurando el envio de correos electronicos
        $usuario = Auth::user()->email;
        $subject = "Pedido de tintas para ". Auth::user()->name .' de ' . Auth::user()->puesto ;
        $for = [Auth::user()->email, 'arturo.resendiz@grupopabsa.com'];
        $datos = request();


        Mail::send('admin.pedido',compact('datos', 'usuario'), function($msj) use($subject,$for){

            $msj->from("appresendiz@zohomail.com","Sistemas Pabsa");
            $msj->subject($subject);
            $msj->to($for);

        });


        Pedido::create([
            'numero' => request('numero_tinta'),
            'negra' => request('negra'),
            'amarilla' => request('amarilla'),
            'azul' => request('azul'),
            'rosa' => request('rosa'),
            'foto_tanques' => $imagen,
            'id_usuario' =>  $id_usuario
          ]);


          return back()->with('enviado', 'Tu pedido fue enviado');
    }



}
                           
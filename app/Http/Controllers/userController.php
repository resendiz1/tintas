<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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



}
                           
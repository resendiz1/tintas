<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function  store(){

        //Recibo el email y lo guado en la variable con el mismo nombre
        $email = request('email');

        //Convierto todo el email a una encriptacion MD5 y selecciono los primeros 8 digitos para no hacer la contraseña tan larga
        $contraseña = substr(md5($email), 0,8);


        //Se agregan los datos a la base de datos
        User::create([
            'nombre' =>request('nombre'),
            'email' => request('email'),
            'puesto' =>request('puesto'),
            'planta' => request('planta'),
            'password' => $contraseña
        ]);

        return back()->with('success', 'El usuario fue creado');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Admini;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class adminController extends Controller
{



    public function store(){
        Admini::create([
            'nombre' =>request('nombre'),
            'planta' => request('planta'),
            'email' => request('email'),
            'password' => request('password')
        ]);


        return back()->with('success', 'El administrador se agrego con exito!');
    }



    public function send_credentials(Request $request){

        $usuario = request('email');
        $subject = "Asunto del correo";
        $for = request('email');
        $password= substr(md5($for), 0, 8);


        Mail::send('admin.credenciales',compact('password', 'usuario'), function($msj) use($subject,$for){

            $msj->from("nominas-rh@hotmail.com","Sistemas Pabsa");
            $msj->subject($subject);
            $msj->to($for);

        });

        return back()->with("enviado", "Tus credenciales fueron enviadas a: <b> $for </b> ");

    }
}

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

        
        $subject = "Asunto del correo";
        $for = request('email');


        Mail::send('usuario.login',$request->all(), function($msj) use($subject,$for){

            $msj->from("nominas-rh@hotmail.com","NombreQueApareceráComoEmisor");
            $msj->subject($subject);
            $msj->to($for);

        });

        return 'back();';

    }
}

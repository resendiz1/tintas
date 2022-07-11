<?php

namespace App\Http\Controllers;

use App\Models\Admini;
use App\Models\Pedido;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Stmt\Return_;

class adminController extends Controller
{


    use AuthenticatesUsers;

    //En el curso me recomienda hacer esa declaracion, pero si voy a la definición y modifico la ruta 
    //manualmente, esta funciona 
    protected $loginView = 'admin.login';

    //Esta mamada se usaba antes y ahora voyn a ver si se puede con otra cosa que encontre en los comentarios del video 
    //esta es la cosa --->    protected $guard = 'adminis'; 


    //Sustituyo la vista que esta predefinida como showLoginForm
    protected function showLoginForm(){
        return view('admin.login');
    }

    //Asigno el GUARD que acabo de implementar en el archivo auth.php
    protected function guard(){
        return Auth::guard('adminis');
    }

    //Me redirige a 
    protected function authenticated(){
        return redirect()->route('admin.dashboard');
    }

    
    public function store(){


        //Encriptando la contraseña
        $password = Hash::make(request('password'));


        Admini::create([
            'name' =>request('nombre'),
            'planta' => request('planta'),
            'email' => request('email'),
            'password' => $password
        ]);


        return back()->with('success', 'El administrador se agrego con exito!');
    }



    public function send_credentials(Request $request){

        $usuario = request('email');
        $subject = "Asunto del correo";
        $for = request('email');
        $password= substr(md5($for), 0, 8);


        Mail::send('admin.credenciales',compact('password', 'usuario'), function($msj) use($subject,$for){

            $msj->from("appresendiz@zohomail.com","Sistemas Pabsa");
            $msj->subject($subject);
            $msj->to($for);

        });

        return back()->with("enviado", "Tus credenciales fueron enviadas a: <b> $for </b> ");

    }




    public function dahsboard(){


     $pedidos = DB::select("SELECT*FROM pedidos WHERE entregada IS NULL OR entregada = ''  ");


     return view('admin.dashboard', compact('pedidos'));




    }


}

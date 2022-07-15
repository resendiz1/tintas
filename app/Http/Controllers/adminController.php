<?php

namespace App\Http\Controllers;

use App\Models\Admini;
use App\Models\Pedido;
use App\Models\User;
use Exception;
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
        

        $request->validate([
            'email' => 'required|email'
        ]);

        

        $usuario = request('email');
        $veces_enviadas = DB::select("SELECT credenciales_enviadas FROM users WHERE email = '$usuario' ");
        $contador = $veces_enviadas[0]->credenciales_enviadas;




        if($contador>=3){
            return back()->with('conteo', 'No se pueden enviar mas de 3 veces las credenciales');
        }
        else{

        
 
        
        

     try{
        
        $subject = "Asunto del correo";
        $for = request('email');
        $password= substr(md5($for), 0, 8);


        Mail::send('admin.credenciales',compact('password', 'usuario'), function($msj) use($subject,$for){

            $msj->from("appresendiz@zohomail.com","Sistemas Pabsa");
            $msj->subject($subject);
            $msj->to($for);

        });




        DB::update("UPDATE users SET credenciales_enviadas = $contador + 1  WHERE email LIKE '$usuario'");
        




        return back()->with("enviado", "Tus credenciales fueron enviadas a: <b> $for </b> ");

    }

    catch(Exception $e){
        return 'Ocurrio un error inesperado: '. $e;
    }


}

    }




    public function dahsboard(){


     $pedidos = DB::select("SELECT*FROM pedidos WHERE entregada IS NULL OR entregada = ''  ");


     return view('admin.dashboard', compact('pedidos'));
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }



    public function logout_admin(){
        Auth::logout('admini');
        return redirect()->route('login');
    }


}

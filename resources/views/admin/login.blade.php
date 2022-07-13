@extends('plantilla')
@section('contenido')
    
@include('admin.navegacion')
<div class="container">
    <div class="row mt-5 justify-content-center ">
        <div class="col-4 mt-5 shadow-sm bg-white px-5">
            <div class="col-12 text-center mt-5">
                <img src="img/logo2.png" class="img-fluid w-50" alt="">
                <h4 class="text-center mt-3">Administrador</h4>
                <small>{{$errors}}</small>
            </div>
            <form action="{{route('administrador_login')}}" method="POST">
                @csrf @method('POST')
                <div class="form-group mb-3">
                    <label for="">Correo: </label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="">Contraseña: </label>
                    <input type="text" class="form-control" name="password">
                </div>
                <div class="form-group text-center mt-5 mb-4">
                    <button class="btn btn-success">
                        Entrar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
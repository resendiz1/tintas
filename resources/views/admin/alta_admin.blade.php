@extends('plantilla')
@section('contenido')
@include('admin.navegacion')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-3 text-center">
            @if (session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>

            @endif
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-5 shadow p-3 px-5 mt-5">
            <h1 class="text-center">Alta de Administrador</h1>
            <form action="{{route('agregar.administrador')}}" method="POST">
                @csrf @method('POST')
                <div class="form-group">
                    <label for="nombre" class="">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required value="Arturo Resendiz López">
                </div>
                <div class="form-group">
                    <label for="nombre" class="">Email</label>
                    <input type="text" class="form-control" id="nombre" name="email" required value="arturo.resendiz@grupopabsa.com">
                </div>
                <div class="form-group">
                    <label for="nombre" class="">Password</label>
                    <input type="password" class="form-control" id="nombre" name="password" required value="password">
                </div>
                <div class="form-group">
                    <label for="">Puesto</label>
                    <input type="text" class="form-control" name="puesto" id="" required value="Encargado de sistemas">
                </div>
                <div class="form-group">
                    <label for="">Planta</label>
                    <input type="text" class="form-control" name="planta" id="" required value="Planta 1">
                </div>
                <div class="form-group mt-4 text-center">
                    <button class="btn btn-success">
                        Guardar
                    </button>
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection
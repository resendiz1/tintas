@extends('plantilla')
@section('contenido')
@include('admin.navegacion')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4 p-3 text-center">
            @if (session('success'))
            <div class="alert alert-success">
                    {{session('success')}}
             </div>
            @endif
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-5 shadow bg-white p-3 px-5 mt-5">
            <h1 class="text-center">Alta de usuarios</h1>
            <form action="{{route('agregar.usuario')}}" method="POST">
                @csrf @method('POST')
                <div class="form-group">
                    <label for="nombre" class="">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required >
                </div>
                <div class="form-group">
                    <label for="nombre" class="">Email</label>
                    <input type="text" class="form-control" id="nombre" name="email" required >
                </div>
                <div class="form-group">
                    <label for="">Puesto</label>
                    <input type="text" class="form-control" name="puesto" id="" required >
                </div>
                <div class="form-group">
                    <label for="">Planta</label>
                    <input type="text" class="form-control" name="planta" id="" required>
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
@extends('plantilla')
@section('contenido')
@include('admin.navegacion')
    
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-5 shadow p-3 px-5 mt-5">
            <h1 class="text-center">Alta de usuarios</h1>
            <form action="">
                <div class="form-group">
                    <label for="nombre" class="">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="form-group">
                    <label for="">Puesto</label>
                    <input type="text" class="form-control" name="puesto" id="">
                </div>
                <div class="form-group">
                    <label for="">Planta</label>
                    <input type="text" class="form-control" name="planta" id="">
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
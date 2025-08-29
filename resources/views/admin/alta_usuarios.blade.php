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
        <div class="col-12 col-sm-12 col-md-7 col-lg-5 shadow shadow-sm bg-white p-3 px-5 mt-5">
            <h3 class="text-center my-4">Registrate para pedir tus tintas</h3>
            <form action="{{route('agregar.usuario')}}" method="POST">
                @csrf @method('POST')
                <div class="form-group mt-2 px-4">
                    <label for="nombre" class="">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required >
                </div>
                <div class="form-group mt-2 px-4">
                    <label for="nombre" class="">Email: </label>
                    <input type="text" class="form-control" id="nombre" name="email" required >
                </div>
                <div class="form-group mt-2 px-4">
                    <label for="nombre" class="">Contraseña: </label>
                    <input type="password" class="form-control" id="password" name="password" required >
                    <div class="form-check mt-2">
                        <input type="checkbox" class="form-check-input" id="showPassword" onclick="togglePassword()">
                        <label class="form-check-label" for="showPassword">Mostrar contraseña</label>
                    </div>
                </div>
                <div class="form-group mt-2 px-4">
                    <label for="">Departamento: </label>
                    <input type="text" class="form-control" name="puesto" id="" required >
                </div>
                <div class="form-group mt-2 px-4">
                    <label for="">Planta: </label>
                    <select name="planta" class="form-control" id="">
                        <option value="Planta 1">Planta 1</option>
                        <option value="Planta 2">Planta 2</option>
                        <option value="Planta 3">Planta 3</option>
                    </select>
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



@section('scripts')
<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const checkbox = document.getElementById('showPassword');
        passwordInput.type = checkbox.checked ? 'text' : 'password';
    }
</script> 
@endsection
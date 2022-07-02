@extends('plantilla')
@include('admin.navegacion')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6  text-center mt-5">
            @if (session('enviado'))
                <div class="alert alert-success text-center font-weight-bold">
                    {!!session('enviado')!!}
                </div>
            @endif
        </div>
    </div>
    <div class="row mt-2 justify-content-center ">
        <div class="col-4 mt-5 shadow-sm bg-white px-5">
            <h4 class="text-center mt-5">Login Uusario</h4>
            <form action="">
                <div class="form-group mb-3">
                    <label for="">Correo: </label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Contraseña: </label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group text-center mt-5">
                    <button class="btn btn-success">
                        Entrar
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-3 bg-white shadow-sm p-4">
            <h4 class="text-center">Enviar contraseña a tu Email</h4>
            <form action="{{route('send_credentials')}}" method="POST">
                @csrf @method('POST')

                <select class="form-select" aria-label="Default select example" name="email">
                    <option selected >Selecciona tu correo</option>
                    <option value="arturo.resendiz@grupopabsa.com">arturo.resendiz@grupopabsa.com</option>
                  </select>
                  <div class="form-group text-center mt-3">
                    <button class="btn btn-success">
                        Enviar contraseña
                    </button>
                  </div>
            </form>
        </div>
    </div>
</div>
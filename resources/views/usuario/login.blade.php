    @extends('plantilla')
    @section('contenido')
    
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
                <div class="col-12 text-center">
                    <img src="img/logo2.png" class="img-fluid w-50 mt-5" alt="">
                    <h4 class="text-center mt-3">Usuario</h4>
                </div>
                <div class="col-12 m-auto">
                    @if (session('login_fail'))
                        <div class="alert alert-danger p-2 text-center font-weight-bold">
                            <i class="fa fa-xmark-circle"></i>
                            {{session('login_fail')}}
                        </div>

                    @endif
                </div>
                <form action="{{route('login_usuario')}}" method="POST">
                    @csrf @method('POST')
                    <div class="form-group mb-3">
                        <label for="">Correo: </label>
                        <input type="text" name="email" value="{{old('usuario')}}" class="form-control">
                        <div class="form-group">
                            <label for="">Contraseña: </label>
                        </div>
                        <input type="text" name="password" value="{{old('password')}}" class="form-control">
                    </div>
                    <div class="form-group mt-4">
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" name="remember" id="remember"  >
                            <label class="custom-control-label" for="remember"><b>Recordar sesión</b></label>
                        </div>
                    </div>
                   
                    <div class="form-group text-center mb-4">
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
                        @forelse ($usuarios as $user)
                        <option value="{{$user->email}}">{{$user->email}} | {{$user->name}} </option>
                        @empty
                            <option value="no user to send credentials">no user to send credentials</option>
                        @endforelse
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

    @endsection

<div class="container-fluid">

    <div class="row  px-5 justify-content-center h5 bg-dark shadow text-center py-3 bg-opacity-50">

        @auth()
            <div class="col-auto">
                <a class="text-white font-weight-bold" href="{{route('agregar_admin')}}">
                    Agregar Admin
                </a>
            </div>
            <div class="col-auto">
                <a class="text-white font-weight-bold" href="{{route('agregar_usuarios')}}">
                    Agregar Usuario
                </a>
            </div> 
            <div class="col-auto">
                <a class="text-white font-weight-bold" href="{{route('admin.dashboard')}}">
                    Dashboard Admin
                </a>
            </div>
        @endauth
        
        
        @guest       
        {{-- <div class="col-2"><a class="text-white font-weight-bold" href="{{route('dashboard_usuario')}}">Dashboard Usuario</a></div> --}}
        
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-3">
            <a class="text-white font-weight-bold" href="{{route('login')}}">
                <i class="fa-solid fa-user"></i>
                Entrar a pedir tintas
            </a>
        </div>
        
        <div class="col-12 col-sm-12 col-md-4 col-lg- mt-3">
            <a class="text-white font-weight-bold" href="{{route('agregar_usuarios')}}">
            <i class="fa-solid fa-user-plus"></i>
                    Registrarse para pedir tintas
            </a>
        </div>

    @endguest
    </div>
</div>



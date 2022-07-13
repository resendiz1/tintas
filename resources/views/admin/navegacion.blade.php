
<div class="container-fluid">
    <div class="row  px-5 justify-content-end h4 bg-success p-2">
        @auth
        <div class="col-2"><a class="text-white font-weight-bold" href="{{route('admin.dashboard')}}">Dashboard Admin</a></div>
        <div class="col-2"><a class="text-white font-weight-bold" href="{{route('dashboard_usuario')}}">Dashboard Usuario</a></div>
        <div class="col-2"><a class="text-white font-weight-bold" href="{{route('agregar_admin')}}">Agregar Admin</a></div>
        <div class="col-2"><a class="text-white font-weight-bold" href="{{route('agregar_usuarios')}}">Agregar Usuario</a></div> 
        @endauth

        <div class="col-2">
            <a class="text-white font-weight-bold" href="{{route('login')}}">
            <i class="fa fa-user"></i>
            Entrar como usuario
            </a>
        </div>

        <div class="col-2">
            <a class="text-white font-weight-bold" href="{{route('admin_login')}}">
                <i class="fab fa-foder-gear"></i>
                Entrar como Administrador
            </a>
        </div>
    </div>
</div>



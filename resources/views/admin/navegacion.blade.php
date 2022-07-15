
<div class="container-fluid">
    <div class="row  px-5 justify-content-end h5 bg-primary shadow py-3">
        @auth()
        <div class="col-2"><a class="text-white font-weight-bold" href="{{route('agregar_admin')}}">Agregar Admin</a></div>
        <div class="col-2"><a class="text-white font-weight-bold" href="{{route('agregar_usuarios')}}">Agregar Usuario</a></div> 
        <div class="col-2"><a class="text-white font-weight-bold" href="{{route('admin.dashboard')}}">Dashboard Admin</a></div>
        @endauth
        
        
        @guest       
        {{-- <div class="col-2"><a class="text-white font-weight-bold" href="{{route('dashboard_usuario')}}">Dashboard Usuario</a></div> --}}
        
        <div class="col-2">
            <a class="text-white font-weight-bold" href="{{route('login')}}">
                <i class="fa-solid fa-address-card"></i>
                Usuario
            </a>
        </div>
        
        <div class="col-2">
            <a class="text-white font-weight-bold" href="{{route('admin_login')}}">
                <i class="fa-solid fa-bed"></i>
                Administrador
            </a>
        </div>
    @endguest
    </div>
</div>



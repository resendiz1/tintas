@extends('plantilla')
<div class="container">
    <div class="row  px-5 justify-content-center bg-success p-2">
        <div class="col-2"><a class="text-white font-weight-bold" href="{{route('dashboard_admin')}}">Dashboard admin</a></div>
        <div class="col-2"><a class="text-white font-weight-bold" href="{{route('dashboard_usuario')}}">Dashboard usuario</a></div>
        <div class="col-2"><a class="text-white font-weight-bold" href="{{route('agregar_admin')}}">agregar admin</a></div>
        <div class="col-2"><a class="text-white font-weight-bold" href="{{route('agregar_usuarios')}}">agregar usuario</a></div>
        <div class="col-2"><a class="text-white font-weight-bold" href="{{route('usuario_login')}}">Login usuario</a></div>
        <div class="col-2"><a class="text-white font-weight-bold" href="{{route('admin_login')}}">Login administrrador</a></div>
    </div>
</div>
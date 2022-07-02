@extends('plantilla')
<div class="container">
    <div class="row  px-5">
        <div class="col-3">
            <a href="{{route('dashboard_admin')}}">Dashboard admin</a></div>
        <div class="col-3"><a href="{{route('dashboard_usuario')}}">Dashboard usuario</a></div>
        <div class="col-3"><a href="{{route('agregar_admin')}}">agregar admin</a></div>
        <div class="col-3"><a href="{{route('agregar_usuarios')}}">agregar usuario</a></div>
        <div class="col-3"><a href="{{route('usuario_login')}}">Login usuario</a></div>
        <div class="col-3"><a href="{{route('admin_login')}}">Login administrrador</a></div>
    </div>
</div>
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/','admin.dashboard')->name('dashboard_admin');
Route::view('/alta_admin', 'admin.alta_admin')->name('agregar_admin');
Route::view('/alta_usuario', 'admin.alta_usuarios')->name('agregar_usuarios');
Route::view('/dashboard_usuario', 'usuario.dashboard')->name('dashboard_usuario');
Route::view('/login_usuario', 'usuario.login')->name('usuario_login');
Route::view('/login_admin', 'admin.login')->name('admin_login');
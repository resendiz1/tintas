<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;
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

//Ruta que agrega a los usuario s a la base de datos
Route::post('/agregar_usuario', [userController::class, 'store'])->name('agregar.usuario');

//Ruta que agrega a los administradores a la base de datos
Route::post('/agregar_admistrador', [adminController::class, 'store'])->name('agregar.administrador');


//Ruta que envia el email que les envia las conraseña a los usuarios
Route::post('/envio_credenciales', [adminController::class, 'send_credentials'])->name('send_credentials');

Route::post('/buscar', [trabajadorController::class, 'buscar'])->name('buscar');

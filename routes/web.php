<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

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

// index
Route::get('/', function () {
    return view('index');
});
Route::post('/', [HomeController::class, 'home']);

// remover cliente
Route::get('/descadastrar/{email}', function($email) {
    return view('descadastro', ['email'=>$email]);
});
Route::post('/descadastrar/{email}', [ClienteController::class, 'descadastrar_cliente']);

// login
Route::get('/login', function() {
    return view('login');
});
Route::post('/login', [AdminController::class, 'login']);

// enviar e-mails
Route::get('/enviar', function() {
    return view('enviar_emails');
});
Route::post('/enviar', [AdminController::class, 'enviar_emails']);

// deslogar
Route::get('/logout', function() {
    return view('logout');
});
Route::post('/logout', [AdminController::class, 'logout']);

// gerenciar admins
Route::get('/gerenciar-admins', function() {
    return view('gerenciar_admins');
});
Route::post('/gerenciar-admins', [AdminController::class, 'gerenciar_admins']);
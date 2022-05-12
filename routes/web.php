<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AdminController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

// home
Route::get('/', function () {
    return view('index');
});
Route::post('/', [ClienteController::class, 'cadastrar_cliente']);

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

// cadastrar admin
Route::get('/admin/cadastro', function() {
    return view('admin_cadastro');
});
Route::post('/admin/cadastro', [AdminController::class, 'cadastrar_admin']);

// remover admin
Route::get('/admin/remocao', function() {
    return view('admin_remocao');
});
Route::post('/admin/remocao', [AdminController::class, 'remover_admin']);
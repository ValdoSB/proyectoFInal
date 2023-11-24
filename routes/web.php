<?php

use App\Http\Controllers\LibrosController;
use App\Http\Controllers\ClientesController;
use App\Models\Libro;
use App\Models\Clientes;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/libros/pdf', [LibrosController::class, ''])->name('libros.pdf');
Route::resource('libros', LibrosController::class);
Route::resource('clientes', ClientesController::class);
Route::middleware
([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/clientes/create', [ClientesController::class, 'create'])
    ->middleware('password.confirm')
    ->name('clientes.create');

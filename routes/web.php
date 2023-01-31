<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'web'])->group(function () {
    Route::get('/cursos', [CursoController::class, 'index'])->name('cursos');
    Route::get('/cursos/adicionar', [CursoController::class, 'adicionar'])->name('adicionar');
    Route::get('/cursos/visualizar/{id}', [CursoController::class, 'visualizar'])->name('visualizar');
    Route::get('/cursos/editar/{id}', [CursoController::class, 'editar'])->name('editar');
    Route::get('/cursos/deletar/{id}', [CursoController::class, 'deletar'])->name('deletar');
    Route::put('/cursos/atualizar/{id}', [CursoController::class, 'atualizar'])->name('atualizar');
    Route::post('/cursos/salvar', [CursoController::class, 'salvar'])->name('salvar');
});

// Auth::routes();
// Route::get('/cursos', [CursoController::class, 'index'])->name('cursos');

// Route::prefix('admin')->group(function () {
//     Route::get('/cursos', [CursoController::class, 'index'])->name('cursos');    
// });

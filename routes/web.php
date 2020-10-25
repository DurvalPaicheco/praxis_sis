<?php

use App\Http\Controllers\UserController;
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


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [UserController::class, 'index'])->name('dashboard');

//Route::middleware(['auth:sanctum', 'verified'])->get('/list', [UserController::class, 'list'])->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/', [UserController::class, 'index'])->name('welcome');

Route::middleware(['auth:sanctum', 'verified'])->get('/new', [UserController::class, 'new'])->name('CadAluno');

Route::middleware(['auth:sanctum', 'verified'])->get('/extrato', [UserController::class, 'extrato'])->name('extrato');

Route::middleware(['auth:sanctum', 'verified'])->get('/lanc_debito', [UserController::class, 'debito'])->name('debito');

Route::middleware(['auth:sanctum', 'verified'])->get('/lanc_credito', [UserController::class, 'credito'])->name('credito');

Route::middleware(['auth:sanctum', 'verified'])->post('/valida', [UserController::class, 'valida']);

Route::middleware(['auth:sanctum', 'verified'])->get('/novo_curso', [UserController::class, 'newCurso'])->name('novocurso');

Route::middleware(['auth:sanctum', 'verified'])->get('/valida_curso', [UserController::class, 'validaCurso'])->name('vad_curs');

Route::middleware(['auth:sanctum', 'verified'])->post('/cadastro_aluno', [UserController::class, 'validaCadAluno'])->name('cadastro_aluno');

Route::get('/registro', function () {
    return view('auth.register');
})->name('registro');









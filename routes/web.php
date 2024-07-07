<?php

use App\Http\Controllers\LancamentoController;
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

Route::get('/', [LancamentoController::class, 'listar'])->name('lista');
Route::get('/cadastro', [LancamentoController::class, 'cadastrar'])->name('cadastro');
Route::get('/{id}', [LancamentoController::class, 'editar'])->name('edicao');
Route::post('/', [LancamentoController::class, 'inserir'])->name('inserir');
Route::put('/{id}', [LancamentoController::class, 'atualizar'])->name('atualizar');
Route::delete('/{id}', [LancamentoController::class, 'excluir'])->name('excluir');
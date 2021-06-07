<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsuarioController;
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

Route::match(['get', 'post'], '/', [ProdutoController::class, 'produtos'])->name('home');

Route::match(['get', 'post'], '/categoria', [ProdutoController::class, 'categoria'])->name('categoria');

Route::match(['get', 'post'], '{idcategoria}/categoria', [ProdutoController::class, 'categoria'])->name('categoria_id');

Route::match(['get', 'post'], '{idprod}/carrinho/add', [ProdutoController::class, 'add_carrinho'])->name('addcarrinho');

Route::match(['get', 'post'], '{iditem}/carrinho/remove', [ProdutoController::class, 'rm_carrinho'])->name('rmcarrinho');

Route::match(['get', 'post'], 'carrinho', [ProdutoController::class, 'carrinho'])->name('carrinho');

Route::post('/cadastrar', [UsuarioController::class, 'cadastrar']);

Route::get('/cadastro', [UsuarioController::class, 'cadastro']);

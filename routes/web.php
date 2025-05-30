<?php
use App\Http\Controllers\AgendamentoControler;
use App\Http\Controllers\ReservaControler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuarioController;

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
Route::get('/homeAdmin','App\Http\Controllers\UsuarioController@index');

Route::get('/login', function () {
    return view('areaUsuario.login');
});
Route::get('/registro', function () {
    return view('areaUsuario.registro');
});
Route::post('/registrarNovoUser','App\Http\Controllers\UsuarioController@store');

Route::get('/calendario', function(){
    return view('calendario');
});

Route::get('/cardapio', [ProdutosController::class, 'index'])->name('produtos.index');

Route::get('/nossoRestaurante', function(){
    return view('areaUsuario.nossoRestaurante');
});
Route::get('/home', function(){
    return view('areaUsuario.home');
});

Route::get('/', [ReservaControler::class, 'index'])->name('agendamento.index');

Route::post('/inserirAgendamento', [ReservaControler::class, 'store'])->name('agendamento.store');

Route::post('/novoProduto', [ProdutosController::class, 'store'])->name('produtos.store');
Route::post('/editarProduto/{id}', [ProdutosController::class, 'update'])->name('produtos.update');
Route::get('/deletarProduto/{id}', [ProdutosController::class, 'destroy'])->name('produtos.destroy');
Route::post('/editarUsuario/{id}', [UsuarioController::class, 'update'])->name('usuario.update');

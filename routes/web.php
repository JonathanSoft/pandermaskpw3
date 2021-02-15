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
Route::get('/', function () {
    return view('welcome');
});

Route::get('pand000', function () {
    return 'pandermask pw3';
});

Route::resource('clientes',\App\Http\Controllers\ClienteController::class)->middleware(['auth']);
Route::resource('categorias',\App\Http\Controllers\CategoriaController::class)->middleware(['auth']);
Route::resource('produtos',\App\Http\Controllers\ProdutoController::class)->middleware(['auth']);

Route::get('teste',function () {
    return view('main');
});

Route::get('vit', function () {
    $produtos = \App\Models\Produto::all();
    $categorias = \App\Models\Categoria::all();
    return view('vitrine', compact('produtos', 'categorias'));
});

Route::get('categoriasvitrine/{categoria}', function ($categoria){
    $categorias = \App\Models\Categoria::all();
    $categoriaview = \App\Models\Categoria::findOrFail($categoria);
    return view('vitrine2', compact('categorias', 'categoriaview'));
})->name('categorias.vitrine');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect()->route('produtos.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


<?php

use Illuminate\Support\Facades\Route;

use App\Models\Produto;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('inicio');
});

Route::post('/cadastrar-produto', function(Request $request){
    
    Produto::create([
        'nome' =>$request->nome,
        'valor' =>$request->valor,
        'estoque' =>$request->estoque
    ]);

    echo "Produto Criado Com Sucesso!";
});

Route::get('/listar-produto/{id}', function ($id) {

    $produto = Produto::find($id);
    return view('listar', ['produto' => $produto]);
});

Route::get('/editar-produto/{id}', function ($id) {
    $produto = Produto::find($id);
    return view('editar', ['produto' => $produto]);
});

Route::post('/editar-produtos/{id}', function (Request $request, $id) {
    $produto = Produto::find($id);

    $produto->update([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque
    ]);

    echo "Produto Editado Com Sucesso!";
});

Route::get('/excluir-produto/{id}', function($id){
    $produto = Produto::find($id);
    $produto->delete();

    echo "O Produto Foi Excluido!";
});
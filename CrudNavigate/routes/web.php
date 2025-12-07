<?php

use Illuminate\Support\Facades\Route;

use App\Models\Cliente;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Laravel\Prompts\Clear;

Route::get('/', function () {
    return view('home');
});

Route::post('/cadastrar-clientes', function(Request $request){
    Cliente::create([
        'nome' => $request->nome,
        'email' => $request->email,
        'contatos' => $request->contatos,
        'data' => $request->data,
        'observacao' => $request->observacao
    ]);

    echo "O Cliente Foi Cadastrado Com Sucesso!";
});

Route::get('/listar-clientes/{id}', function($id){
    $cliente = Cliente::find($id);
    return view('listar', ['cliente' => $cliente]);
});

Route::get('/editar-clientes/{id}', function($id){
    $cliente = Cliente::find($id);
    return view('editar', ['cliente' => $cliente]); 
});

Route::post('/editar-clientes/{id}', function (Request $request,$id) {
    $cliente = Cliente::find($id);

    $cliente->update([
        'nome' => $request->nome,
        'email' => $request->email,
        'contatos' => $request->contatos,
        'data' => $request->data,
        'observacao' => $request->observacao
    ]);

    echo "Os Dados Do Cliente Foram Atualizados Com Sucesso!";
});

Route::get('/excluir-clientes/{id}', function($id){
    $cliente = Cliente::find($id);
    $cliente->delete();

    echo "Os Dados do Cliente Foram Apagados Com Sucesso!";
});
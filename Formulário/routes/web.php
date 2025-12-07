<?php

use Illuminate\Support\Facades\Route;

use App\Models\Produto;
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

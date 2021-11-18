<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        Produto::create([
            'nome' => $request->nome,
            'preco' => $request->preco,
            'qtd' => $request->qtd,
        ]);

        return "Produto cadastrado!";
    }

    public function show($id)
    {
        $produto = Produto::findorFail($id);
        return view('produtos.show', ['produto' => $produto]);
    }

    public function edit($id)
    {
        $produto = Produto::FindorFail($id);
        return view('produtos.edit', ['produto' => $produto]);
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::FindorFail($id);

        $produto->update([
            'nome' => $request->nome,
            'preco' => $request->preco,
            'quantidade' => $request->qtd
        ]);

        return "Produto Atualizado!";
    }

    public function delete($id)
    {
        $produto = Produto::findorFail($id);
        return view('produtos.delete', ['produto' => $produto]);
    }

    public function destroy($id)
    {
        $produto = Produto::FindorFail($id);
        $produto->delete();

        return "Produto Excluído!";
    }
}

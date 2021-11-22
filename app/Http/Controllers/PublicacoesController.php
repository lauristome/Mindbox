<?php

namespace App\Http\Controllers;

use App\Models\Publicacao;
use Illuminate\Http\Request;

class PublicacoesController extends Controller
{
    public function create()
    {
        return view('publicacoes.create');
    }

    public function store(Request $request)
    {
        Publicacao::create([
            'id_usuario' => $request->id_usuario,
            'id_publicacao' => $request->id_publicacao,
            'conteudo' => $request->conteudo,
        ]);

        return "Publicação cadastrada!";
    }

    public function read($id)
    {
        $publicacao = Publicacao::findOrFail($id);
        return view('publicacoes.show', ['publicacao' => $publicacao]);
    }

    public function edit($id)
    {
        $publicacao = Publicacao::findOrFail($id);
        return view('publicacoes.edit', ['publicacao' => $publicacao]);
    }

    public function update(Request $request, $id)
    {
        $publicacao = Publicacao::findOrFail($id);

        $publicacao->update([
            'id_usuario' => $request->id_usuario,
            'id_publicacao' => $request->id_publicacao,
            'conteudo' => $request->conteudo,
        ]);

        return "Publicação atualizada!";
    }

    public function delete($id)
    {
        $publicacao = Publicacao::findorFail($id);
        return view('publicacoes.delete', ['publicacao' => $publicacao]);
    }

    public function destroy($id)
    {
        $publicacao = Publicacao::FindorFail($id);
        $publicacao->delete();

        return "Publicação Excluída!";
    }
}

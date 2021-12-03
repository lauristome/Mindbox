<?php

namespace App\Http\Controllers;

use App\Models\Publicacao;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class PublicacoesController extends Controller
{
    public function listComentarios($id)
    {
        $publicacao = Publicacao::find($id);

        $comentarios = $publicacao->comentarios()->orderBy("id", "desc")->get();
        return $comentarios;
    }

    public function ranking()
    {
        $publicacao = Publicacao::all();
        $unsortedData = collect($publicacao);

        $sortedData = $unsortedData->sortByDesc('ups');
        return $sortedData;
    }

    public function store(Request $request)
    {
        $new_publicacao = Publicacao::create([
            'id_usuario' => $request->id_usuario,
            'id_publicacao' => $request->id_publicacao,
            'conteudo' => $request->conteudo,
        ]);

        if (!$request->id_publicacao == null) {
            $publicacao = Publicacao::find($request->id_publicacao);
            // return ($publicacao->qtd_comentarios) + 1;
            $publicacao->update([
                'qtd_comentarios' => ($publicacao->qtd_comentarios) + 1
            ]);
        }

        return Response::json(['Publicação criada!', $new_publicacao]);
    }

    public function read($id)
    {
        $publicacao = Publicacao::findOrFail($id);
        return $publicacao;
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

    public function destroy($id)
    {
        $publicacao = Publicacao::FindorFail($id);
        $publicacao->delete();

        return "Publicação Excluída!";
    }
}

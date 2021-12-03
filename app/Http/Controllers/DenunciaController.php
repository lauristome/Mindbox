<?php

namespace App\Http\Controllers;

use App\Models\UsuarioDenunciaPublicacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class DenunciaController extends Controller
{
    public function create()
    {
        return view('denuncias.create');
    }

    public function store(Request $request)
    {
        $new_denuncia = UsuarioDenunciaPublicacao::create([
            'id_usuario' => $request->id_usuario,
            'id_publicacao' => $request->id_publicacao,
            'motivo' => $request->motivo,
        ]);

        return Response::json(['Denúncia registrada', $new_denuncia]);
    }

    public function read($id)
    {
        $denuncia = UsuarioDenunciaPublicacao::findOrFail($id);
        return $denuncia;
    }

    public function update(Request $request, $id)
    {
        $denuncia = UsuarioDenunciaPublicacao::findOrFail($id);

        $denuncia->update([
            'id_usuario' => $request->id_usuario,
            'id_publicacao' => $request->id_publicacao,
            'motivo' => $request->motivo,
        ]);

        return Response::json(['Denúncia editada', $denuncia]);
    }

    public function destroy($id)
    {
        $denuncia = UsuarioDenunciaPublicacao::FindorFail($id);
        $denuncia->delete();

        return "Denúncia Excluída!";
    }
}

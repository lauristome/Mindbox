<?php

namespace App\Http\Controllers;

use App\Models\UsuarioDenunciaPublicacao;
use Illuminate\Http\Request;

class DenunciaController extends Controller
{
    public function create()
    {
        return view('denuncias.create');
    }

    public function store(Request $request)
    {
        UsuarioDenunciaPublicacao::create([
            'id_usuario' => $request->id_usuario,
            'id_publicacao' => $request->id_publicacao,
            'motivo' => $request->motivo,
        ]);

        return "Curtida cadastrada!";
    }

    public function read($id)
    {
        $denuncia = UsuarioDenunciaPublicacao::findOrFail($id);
        return view('denuncias.show', ['denuncia' => $denuncia]);
    }

    public function edit($id)
    {
        $denuncia = UsuarioDenunciaPublicacao::findOrFail($id);
        return view('denuncias.edit', ['denuncia' => $denuncia]);
    }

    public function update(Request $request, $id)
    {
        $denuncia = UsuarioDenunciaPublicacao::findOrFail($id);

        $denuncia->update([
            'id_usuario' => $request->id_usuario,
            'id_publicacao' => $request->id_publicacao,
            'motivo' => $request->motivo,
        ]);

        return "Curtida atualizada!";
    }

    public function delete($id)
    {
        $denuncia = UsuarioDenunciaPublicacao::findorFail($id);
        return view('denuncias.delete', ['denuncia' => $denuncia]);
    }

    public function destroy($id)
    {
        $denuncia = UsuarioDenunciaPublicacao::FindorFail($id);
        $denuncia->delete();

        return "Curtida Excluída!";
    }
}

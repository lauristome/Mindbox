<?php

namespace App\Http\Controllers;

use App\Models\Publicacao;
use App\Models\UsuarioCurtePublicacao;
use Illuminate\Http\Request;

class CurtidaController extends Controller
{
    public function create()
    {
        return view('curtidas.create');
    }

    public function store(Request $request)
    {
        UsuarioCurtePublicacao::create([
            'id_usuario' => $request->id_usuario,
            'id_publicacao' => $request->id_publicacao,
            'up' => $request->up,
        ]);

        $publicacao = Publicacao::findOrFail($request->id_publicacao);
        if ($request->up == 0) {
            $publicacao->update([
                'downs' => ($publicacao->downs) + 1,
            ]);
        } else if ($request->up == 1) {
            $publicacao->update([
                'ups' => ($publicacao->ups) + 1,
            ]);
        }

        return "Curtida cadastrada!";
    }

    public function read($id)
    {
        $curtida = UsuarioCurtePublicacao::findOrFail($id);
        return view('curtidas.show', ['curtida' => $curtida]);
    }

    public function edit($id)
    {
        $curtida = UsuarioCurtePublicacao::findOrFail($id);
        return view('curtidas.edit', ['curtida' => $curtida]);
    }

    public function update(Request $request, $id)
    {
        $curtida = UsuarioCurtePublicacao::findOrFail($id);

        $curtida->update([
            'id_usuario' => $request->id_usuario,
            'id_publicacao' => $request->id_publicacao,
            'up' => $request->up,
        ]);

        return "Curtida atualizada!";
    }

    public function delete($id)
    {
        $curtida = UsuarioCurtePublicacao::findorFail($id);
        return view('curtidas.delete', ['curtida' => $curtida]);
    }

    public function destroy($id)
    {
        $curtida = UsuarioCurtePublicacao::FindorFail($id);
        $curtida->delete();

        $publicacao = Publicacao::findOrFail($curtida->id_publicacao);
        if ($curtida->up == 0) {
            $publicacao->update([
                'downs' => ($publicacao->downs) - 1,
            ]);
        } else if ($curtida->up == 1) {
            $publicacao->update([
                'ups' => ($publicacao->ups) - 1,
            ]);
        }

        return "Curtida Excluída!";
    }
}

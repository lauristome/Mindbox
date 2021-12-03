<?php

namespace App\Http\Controllers;

use App\Models\Publicacao;
use App\Models\UsuarioCurtePublicacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CurtidaController extends Controller
{
    public function store(Request $request)
    {
        $new_curtida = UsuarioCurtePublicacao::create([
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

        return Response::json(['Curtida registrada', $new_curtida]);
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

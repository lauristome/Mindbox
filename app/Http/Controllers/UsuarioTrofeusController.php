<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrofeuUsuario;
use Illuminate\Support\Facades\Response;

class UsuarioTrofeusController extends Controller
{
    public function store(Request $request)
    {
        $trofeu_usuario = TrofeuUsuario::create([
            'id_usuario' => $request->id_usuario,
            'id_trofeu' => $request->id_trofeu,
        ]);

        return Response::json(['Conquista registrada', $trofeu_usuario]);
    }


    public function destroy($id)
    {
        $follow = TrofeuUsuario::FindorFail($id);
        $follow->delete();

        return "Conquista Excluída!";
    }
}

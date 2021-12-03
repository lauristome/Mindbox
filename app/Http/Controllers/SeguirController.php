<?php

namespace App\Http\Controllers;

use App\Models\UsuarioSegueUsuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class SeguirController extends Controller
{
    public function store(Request $request)
    {
        $new_seguida = UsuarioSegueUsuario::create([
            'id_usuario' => $request->id_usuario,
            'id_seguido' => $request->id_seguido,
        ]);

        return Response::json(['Seguida registrada', $new_seguida]);
    }


    public function destroy($id)
    {
        $follow = UsuarioSegueUsuario::FindorFail($id);
        $follow->delete();

        return "Seguida Excluída!";
    }
}

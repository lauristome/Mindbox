<?php

namespace App\Http\Controllers;

use App\Models\UsuarioSegueUsuario;
use Illuminate\Http\Request;

class SeguirController extends Controller
{
    public function create()
    {
        return view('follow.create');
    }

    public function store(Request $request)
    {
        UsuarioSegueUsuario::create([
            'id_usuario' => $request->id_usuario,
            'id_seguido' => $request->id_seguido,
        ]);

        return "Curtida cadastrada!";
    }

    public function read($id)
    {
        $follow = UsuarioSegueUsuario::findOrFail($id);
        return view('follow.show', ['follow' => $follow]);
    }

    public function edit($id)
    {
        $follow = UsuarioSegueUsuario::findOrFail($id);
        return view('follow.edit', ['follow' => $follow]);
    }

    public function update(Request $request, $id)
    {
        $follow = UsuarioSegueUsuario::findOrFail($id);

        $follow->update([
            'id_usuario' => $request->id_usuario,
            'id_seguido' => $request->id_seguido,
        ]);

        return "Curtida atualizada!";
    }

    public function delete($id)
    {
        $follow = UsuarioSegueUsuario::findorFail($id);
        return view('follow.delete', ['follow' => $follow]);
    }

    public function destroy($id)
    {
        $follow = UsuarioSegueUsuario::FindorFail($id);
        $follow->delete();

        return "Curtida Excluída!";
    }
}

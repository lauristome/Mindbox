<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller
{
    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        Usuario::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => $request->senha,
        ]);

        return "Usuário cadastrado!";
    }

    public function read($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.show', ['usuario' => $usuario]);
    }

    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.edit', ['usuario' => $usuario]);
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);

        $usuario->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => $request->senha,
        ]);

        return "Usuário atualizado!";
    }

    public function delete($id)
    {
        $usuario = Usuario::findorFail($id);
        return view('usuarios.delete', ['usuario' => $usuario]);
    }

    public function destroy($id)
    {
        $usuario = Usuario::FindorFail($id);
        $usuario->delete();

        return "Usuário Excluído!";
    }
}

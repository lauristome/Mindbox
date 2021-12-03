<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Publicacao;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;


class UsuariosController extends Controller
{
    public function feed($id)
    {
        $user = Usuario::find($id);

        $id_amigos = [];
        foreach ($user->seguindo as $amigo) {
            $id_amigos[] = $amigo->id;
        }

        return Publicacao::whereIn('id_usuario', $id_amigos)->orderBy('created_at')->get();
    }


    public function listPublicacoes($id)
    {
        $user = Usuario::find($id);

        $publicacoes = $user->publicacoes()->orderBy("id", "desc")->get();
        return $publicacoes;
    }

    public function listTrofeus($id)
    {
        $user = Usuario::find($id);

        $trofeus = $user->trofeus()->orderBy("id", "desc")->get();
        return $trofeus;
    }

    public function store(Request $request)
    {
        $new_usuario = Usuario::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => Hash::make($request->senha),
        ]);

        return Response::json(['Usuário criado', $new_usuario]);
    }

    public function read($id)
    {
        $usuario = Usuario::findOrFail($id);
        return $usuario;
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);

        if (!$request->nome == null) {
            $usuario->update([

                'nome' => $request->nome,
            ]);
        }
        if (!$request->email == null) {
            $usuario->update([

                'email' => $request->email,
            ]);
        }
        if (!$request->senha == null) {
            $usuario->update([

                'senha' => Hash::make($request->senha),
            ]);
        }
        return Response::json(['Usuário atualizado', $usuario]);
    }

    public function destroy($id)
    {
        $usuario = Usuario::FindorFail($id);
        $usuario->delete();

        return "Usuário Excluído!";
    }



    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'senha' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->senha])) {
            return "Usuário logado!";
        } else {
            return "Senha ou e-mail inválidos";
        };
    }
}

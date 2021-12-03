<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function store(Request $request)
    {
        $new_admin = Admin::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => Hash::make($request->senha)
        ]);

        return Response::json(['Administrador cadastrado!', $new_admin]);
    }

    public function read($id)
    {
        $admin = Admin::findOrFail($id);
        return $admin;
    }

    public function update(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);

        $admin->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => Hash::make($request->senha)
        ]);

        return Response::json(['Administrador atualizado', $admin]);
    }

    public function destroy($id)
    {
        $admin = Admin::FindorFail($id);
        $admin->delete();

        return "Administrador Excluído!";
    }
    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'senha' => 'required',
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->senha])) {
            return "Usuário logado!";
        } else {
            return "Senha ou e-mail inválidos";
        };
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        Admin::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => $request->senha,
        ]);

        return "Administrador cadastrado!";
    }

    public function read($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.show', ['admin' => $admin]);
    }

    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.edit', ['admin' => $admin]);
    }

    public function update(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);

        $admin->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => $request->senha,
        ]);

        return "Administrador atualizado!";
    }

    public function delete($id)
    {
        $admin = Admin::findorFail($id);
        return view('admin.delete', ['admin' => $admin]);
    }

    public function destroy($id)
    {
        $admin = Admin::FindorFail($id);
        $admin->delete();

        return "Administrador Excluído!";
    }
}

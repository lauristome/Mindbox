<?php

namespace App\Http\Controllers;

use App\Models\Trofeu;
use Illuminate\Http\Request;

class TrofeusController extends Controller
{
    public function create()
    {
        return view('trofeus.create');
    }

    public function store(Request $request)
    {
        Trofeu::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao
        ]);

        return "Troféu cadastrado!";
    }

    public function read($id)
    {
        $trofeu = Trofeu::findOrFail($id);
        return view('trofeus.show', ['trofeu' => $trofeu]);
    }

    public function edit($id)
    {
        $trofeu = Trofeu::findOrFail($id);
        return view('trofeus.edit', ['trofeu' => $trofeu]);
    }

    public function update(Request $request, $id)
    {
        $trofeu = Trofeu::findOrFail($id);

        $trofeu->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
        ]);

        return "Troféu atualizado!";
    }

    public function delete($id)
    {
        $trofeu = Trofeu::findorFail($id);
        return view('trofeus.delete', ['trofeu' => $trofeu]);
    }

    public function destroy($id)
    {
        $trofeu = Trofeu::FindorFail($id);
        $trofeu->delete();

        return "Troféu Excluído!";
    }
}

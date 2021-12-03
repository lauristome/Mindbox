<?php

namespace App\Http\Controllers;

use App\Models\Trofeu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class TrofeusController extends Controller
{
    public function create()
    {
        return view('trofeus.create');
    }

    public function store(Request $request)
    {
        $new_trofeu = Trofeu::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao
        ]);

        return Response::json(['Troféu cadastrado!', $new_trofeu]);
    }

    public function read($id)
    {
        $trofeu = Trofeu::findOrFail($id);
        return $trofeu;
    }

    public function update(Request $request, $id)
    {
        $trofeu = Trofeu::findOrFail($id);

        $trofeu->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
        ]);

        return Response::json(['Troféu atualizado!', $trofeu]);
    }

    public function destroy($id)
    {
        $trofeu = Trofeu::FindorFail($id);
        $trofeu->delete();

        return "Troféu Excluído!";
    }
}

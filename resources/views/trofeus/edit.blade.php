<<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Editar Troféu</title>
    </head>

    <body>
        <form action="{{ route('alterar-trofeu', ['id' => $trofeu->id]) }}" method="POST">
            @csrf
            <label for="">Nome</label> <br />
            <input type="text" name="nome" value="{{ $trofeu->nome }}"> <br />
            <label for="">Descrição</label> <br />
            <input type="text" name="descricao" value="{{ $trofeu->descricao }}"> <br />
            <button>Atualizar</button>
        </form>
    </body>

    </html>
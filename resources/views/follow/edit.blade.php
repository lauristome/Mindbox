<<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Editar Publicação</title>
    </head>

    <body>
        <form action="{{ route('alterar-follow', ['id' => $follow->id]) }}" method="POST">
            @csrf
            <label for="">Id do Usuário</label> <br />
            <input type="text" name="id_usuario" value="{{ $follow->id_usuario }}"> <br />
            <label for="">Id do Seguido</label> <br />
            <input type="text" name="id_seguido" value="{{ $follow->id_seguido }}"> <br />
            <button>Atualizar</button>
        </form>
    </body>

    </html>
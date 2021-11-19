<<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Editar Usuário</title>
    </head>

    <body>
        <form action="{{ route('alterar-usuario', ['id' => $usuario->id]) }}" method="POST">
            @csrf
            <label for="">Nome</label> <br />
            <input type="text" name="nome" value="{{ $usuario->nome }}"> <br />
            <label for="">Email</label> <br />
            <input type="text" name="email" value="{{ $usuario->email }}"> <br />
            <label for="">Senha</label> <br />
            <input type="text" name="senha" value="{{ $usuario->senha }}"> <br />
            <button>Atualizar</button>
        </form>
    </body>

    </html>
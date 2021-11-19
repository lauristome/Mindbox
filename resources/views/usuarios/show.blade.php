<<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ver um Usuário</title>
    </head>

    <body>
        <label for="">Nome</label> <br />
        <input type="text" name="nome" value="{{ $usuario->nome }}"> <br />
        <label for="">Email</label> <br />
        <input type="text" name="preco" value="{{ $usuario->email }}"> <br />
        <label for="">Senha</label> <br />
        <input type="text" name="qtd" value="{{ $usuario->senha }}"> <br />
    </body>

    </html>
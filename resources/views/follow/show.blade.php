<<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ver uma Publicação</title>
    </head>

    <body>
        <label for="">Id</label> <br />
        <input type="text" name="nome" value="{{ $follow->id }}"> <br />
        <label for="">Id Usuário</label> <br />
        <input type="text" name="usuario" value="{{ $follow->id_usuario }}"> <br />
        <label for="">Id Publicação</label> <br />
        <input type="text" name="id_seguido" value="{{ $follow->id_seguido }}"> <br />
    </body>

    </html>
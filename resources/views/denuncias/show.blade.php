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
        <input type="text" name="nome" value="{{ $denuncia->id }}"> <br />
        <label for="">Id Usuário</label> <br />
        <input type="text" name="id_usuario" value="{{ $denuncia->id_usuario }}"> <br />
        <label for="">Id Publicação</label> <br />
        <input type="text" name="id_publicacao" value="{{ $denuncia->id_publicacao }}"> <br />
        <label for="">Motivo</label> <br />
        <input type="text" name="motivo" value="{{ $denuncia->motivo }}"> <br />
    </body>

    </html>
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
        <input type="text" name="nome" value="{{ $publicacao->id }}"> <br />
        <label for="">Conteudo</label> <br />
        <input type="text" name="preco" value="{{ $publicacao->conteudo }}"> <br />
    </body>

    </html>
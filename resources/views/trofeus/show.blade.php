<<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ver um Troféu</title>
    </head>

    <body>
        <label for="">Nome</label> <br />
        <input type="text" name="nome" value="{{ $trofeu->nome }}"> <br />
        <label for="">Descricao</label> <br />
        <input type="text" name="preco" value="{{ $trofeu->descricao }}"> <br />
    </body>

    </html>
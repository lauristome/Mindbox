<<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastrar Troféu</title>
    </head>

    <body>
        <form action="{{ route('cadastrar-trofeu') }}" method="POST">
            @csrf
            <label for="">Nome</label> <br />
            <input type="text" name="nome"> <br />
            <label for="">Descrição</label> <br />
            <input type="text" name="descricao"> <br />
            <button>Cadastrar</button>
        </form>
    </body>

    </html>
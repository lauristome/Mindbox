<<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Excluir um Administrador</title>
    </head>

    <body>
        <form action="{{ route('excluir-admin', ['id' => $admin->id]) }}" method="POST">
            @csrf
            <label for="">Tem certeza que deseja excluir o seguinte Administrador?</label> <br />
            <input type="text" name="nome" value="{{ $admin->nome }}"> <br />
            <button>Certeza</button>
        </form>
    </body>

    </html>
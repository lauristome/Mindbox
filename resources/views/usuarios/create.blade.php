<<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastrar Usuário</title>
    </head>

    <body>
        <form action="{{ route('cadastrar-usuario') }}" method="POST">
            @csrf
            <label for="">Nome</label> <br />
            <input type="text" name="nome"> <br />
            <label for="">Email</label> <br />
            <input type="text" name="email"> <br />
            <label for="">Senha</label> <br />
            <input type="text" name="senha"> <br />
            <button>Cadastrar</button>
        </form>
    </body>

    </html>
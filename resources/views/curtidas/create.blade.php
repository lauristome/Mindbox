<<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastrar Curtida</title>
    </head>

    <body>
        <form action="{{ route('cadastrar-curtida') }}" method="POST">
            @csrf
            <label for="">Id do Usuário</label> <br />
            <input type="text" name="id_usuario"> <br />
            <label for="">Id da Publicação</label> <br />
            <input type="text" name="id_publicacao"> <br />
            <label for="">UP</label> <br />
            <input type="text" name="up"> <br />
            <button>Cadastrar</button>
        </form>
    </body>

    </html>
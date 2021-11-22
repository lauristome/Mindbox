<<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Excluir uma Publicação</title>
    </head>

    <body>
        <form action="{{ route('excluir-curtida', ['id' => $curtida->id]) }}" method="POST">
            @csrf
            <label for="">Tem certeza que deseja excluir a seguinte curtida?</label> <br />
            <input type="text" name="id" value="{{ $curtida->id}}"> <br />
            <input type="text" name="usuario" value="{{$curtida->id_usuario}}"> <br />
            <input type="text" name="publicacao" value="{{$curtida->id_publicacao}}"> <br />
            <input type="text" name="up" value="{{$curtida->up}}"> <br />
            <button>Certeza</button>
        </form>
    </body>

    </html>
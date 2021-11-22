<<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Excluir uma Publicação</title>
    </head>

    <body>
        <form action="{{ route('excluir-follow', ['id' => $follow->id]) }}" method="POST">
            @csrf
            <label for="">Tem certeza que deseja excluir a seguinte follow?</label> <br />
            <input type="text" name="id" value="{{ $follow->id}}"> <br />
            <input type="text" name="usuario" value="{{$follow->id_usuario}}"> <br />
            <input type="text" name="id_seguido" value="{{$follow->id_seguido}}"> <br />
            <button>Certeza</button>
        </form>
    </body>

    </html>
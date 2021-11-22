<<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Excluir uma Publicação</title>
    </head>

    <body>
        <form action="{{ route('excluir-publicacao', ['id' => $publicacao->id]) }}" method="POST">
            @csrf
            <label for="">Tem certeza que deseja excluir a seguinte publicação?</label> <br />
            <input type="text" name="id" value="{{ $publicacao->id}}"> <br />
            <input type="text" name="conteudo" value="{{$publicacao->conteudo}}"> <br />
            <button>Certeza</button>
        </form>
    </body>

    </html>
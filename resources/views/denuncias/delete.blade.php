<<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Excluir uma Denúcia</title>
    </head>

    <body>
        <form action="{{ route('excluir-denuncia', ['id' => $denuncia->id]) }}" method="POST">
            @csrf
            <label for="">Tem certeza que deseja excluir a seguinte denuncia?</label> <br />
            <input type="text" name="id" value="{{ $denuncia->id}}"> <br />
            <input type="text" name="usuario" value="{{$denuncia->id_usuario}}"> <br />
            <input type="text" name="publicacao" value="{{$denuncia->id_publicacao}}"> <br />
            <input type="text" name="motivo" value="{{$denuncia->motivo}}"> <br />
            <button>Certeza</button>
        </form>
    </body>

    </html>
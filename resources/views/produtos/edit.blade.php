<<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ver um produto</title>
    </head>

    <body>
        <form action="{{ route('alterar-produto', ['id' => $produto->id]) }}" method="POST">
            @csrf
            <label for="">Nome</label> <br />
            <input type="text" name="nome" value="{{ $produto->nome }}"> <br />
            <label for="">Preço</label> <br />
            <input type="text" name="preco" value="{{ $produto->preco }}"> <br />
            <label for="">Quantidade</label> <br />
            <input type="text" name="qtd" value="{{ $produto->qtd }}"> <br />
            <button>Enviar</button>
        </form>
    </body>

    </html>
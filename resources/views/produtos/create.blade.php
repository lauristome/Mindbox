<<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastrar Produto =3^^</title>
    </head>

    <body>
        <form action="{{ route('cadastrar-produto') }}" method="POST">
            @csrf
            <label for="">Nome</label> <br />
            <input type="text" name="nome"> <br />
            <label for="">Preço</label> <br />
            <input type="text" name="preco"> <br />
            <label for="">Quantidade</label> <br />
            <input type="text" name="qtd"> <br />
            <button>Enviar</button>
        </form>
    </body>

    </html>
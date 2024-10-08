<!DOCTYPE html>
<html>
<head>
    <title>Criar Produto</title>
</head>
<body>
    <h1>Criar Produto</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao"></textarea>

        <label for="preco">Preço:</label>
        <input type="text" name="preco" id="preco">

        <button type="submit">Salvar</button>
    </form>
</body>
</html>

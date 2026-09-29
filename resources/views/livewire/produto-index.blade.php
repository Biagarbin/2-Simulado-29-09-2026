<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Data/Validade</th>
                <th>Cor</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
            <tr>
                <td>{{ $produto->nome}}</td>
                <td>{{ number_format($produto->preco, 2, ',', '.') }}</td>
                <td>{{ $produto->quantidade}}</td>
                <td>{{ $produto->created_at->format('d/m/y')}}</td>
                <td>{{ $produto->cor}}</td>
                <td>{{ $produto->valor}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

<div class="container py-5">
    <h3>Listagem de Produtos</h3>
    <div class="mt-3 mb-3">
        <a class="btn btn-primary" href="{{ route('produto.create')}}">Cadastrar Produto <i class="bi bi-plus"></i></a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Marca</th>
                <th>Categoria</th>
                <th>Unidade de Medida</th>
                <th>Preço de Custo</th>
                <th>Preço de Venda</th>
                <th>Fornecedor</th>
                <th>Quantidade</th>
                <th>Estoque Mínimo</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($produtos as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nome }}</td>
                    <td>{{ $p->descricao }}</td>
                    <td>{{ $p->marca }}</td>
                    <td>{{ $p->categoria->nome }}</td>
                    <td>{{ $p->unidade_medida }}</td>
                    <td>R${{ $p->preco_custo }}</td>
                    <td>R${{ $p->preco_venda }}</td>
                    <td>{{ $p->fornecedor->nome }}</td>
                    <td>{{ $p->quantidade }}</td>
                    <td>{{ $p->estoque_min }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
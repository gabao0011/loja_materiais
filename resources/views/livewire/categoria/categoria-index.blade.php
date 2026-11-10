<div class="container py-5">
    <h3>Listagem de Categorias</h3>
    <div class="mt-3 mb-3">
        <a class="btn btn-primary" href="{{ route('categoria.create')}}">Cadastrar Categoria <i class="bi bi-plus"></i></a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($categorias as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->nome }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
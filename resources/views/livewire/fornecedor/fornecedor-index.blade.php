<div class="container py-5">
    <h3>Listagem de Fornecedores</h3>
    <div class="mt-3 mb-3">
        <a class="btn btn-primary" href="{{ route('fornecedor.create')}}">Cadastrar Fornecedor <i class="bi bi-plus"></i></a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF/CNPJ</th>
                <th>Telefone</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($fornecedores as $f)
                <tr>
                    <td>{{ $f->id }}</td>
                    <td>{{ $f->nome }}</td>
                    <td>{{ $f->cpf_cnpj }}</td>
                    <td>{{ $f->telefone }}</td>
                    <td>{{ $f->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
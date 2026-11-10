<div class="container py-5">
    <form wire:submit.prevente='store'>
        <h3>Cadastro de Fornecedores</h3>
        <div class="mb-3">
        <label class="form-label">Nome</label>
        <input class="form-control" type="text" wire:model="nome">
        </div>
        <div class="mb-3">
        <label class="form-label">CPF/CNPJ</label>
        <input class="form-control" type="text" wire:model="cpf_cnpj">
        </div>
        <div class="mb-3">
        <label class="form-label">Telefone</label>
        <input class="form-control" type="text" wire:model="telefone">
        </div>
        <div class="mb-3">
        <label class="form-label">Email</label>
        <input class="form-control" type="email" wire:model="email">
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a class="btn btn-secondary" href="{{ route('fonecedor.index')}}">Cancelar</a>

    </form>
</div>
 
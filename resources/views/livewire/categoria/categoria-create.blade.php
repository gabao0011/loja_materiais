<div class="container py-5">
    <form wire:submit.prevente='store'>
        <h3>Cadastro de Categorias</h3>
        <div class="mb-3">
        <label class="form-label">Nome</label>
        <input class="form-control" type="text" wire:model="nome">
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a class="btn btn-secondary" href="{{ route('categoria.index')}}">Cancelar</a>

    </form>
</div>
 
<div class="container py-5">
    <form wire:submit.prevente='store'>
        <h3>Cadastro de Produtos</h3>
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input class="form-control" type="text" wire:model="nome">
        </div>
        <div class="mb-3">
            <label class="form-label">Descrição</label>
            <textarea class="form-control" type="text" wire:model="descricao"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Marca</label>
            <input class="form-control" type="text" wire:model="marca">
        </div>
        <div class="mb-3">
            <label class="form-label">Categoria</label>
            <select class="form-select" wire:model="categoria_id">
                <option value="">Selecione uma categoria...</option>

                @foreach ($categorias as $c)
                    <option value="{{ $c->id }}">
                        {{ $c->nome }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Unidade de Medida</label>
            <select class="form-select" wire:model="unidade_medida">
                <option value="">Selecione...</option>
                <option value="unidade">Unidade</option>
                <option value="metro">Metro</option>
                <option value="metro_quadrado">Metro Quadrado</option>
                <option value="quilo">Quilo</option>
                <option value="saco">Saco</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Preço de Custo</label>
            <input class="form-control" type="text" wire:model="preco_custo">
        </div>
        <div class="mb-3">
            <label class="form-label">Preço de Venda</label>
            <input class="form-control" type="text" wire:model="preco_venda">
        </div>
        <div class="mb-3">
            <label class="form-label">Fornecedor</label>
            <select class="form-select" wire:model="fornecedor_id">
                <option value="">Selecione uma fornecedor...</option>

                @foreach ($fornecedores as $f)
                    <option value="{{ $f->id }}">
                        {{ $f->nome }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Quantidade</label>
            <input class="form-control" type="text" wire:model="quantidade">
        </div>
        <div class="mb-3">
            <label class="form-label">Estoque Mínimo</label>
            <input class="form-control" type="text" wire:model="estoque_min">
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a class="btn btn-secondary" href="{{ route('produto.index')}}">Cancelar</a>

    </form>
</div>

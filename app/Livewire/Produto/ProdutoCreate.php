<?php

namespace App\Livewire\Produto;

use App\Models\Categoria;
use App\Models\Fornecedor;
use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $descricao;
    public $marca;
    public $categoria_id;
    public $unidade_medida;
    public $preco_custo;
    public $preco_venda;
    public $fornecedor_id;
    public $quantidade;
    public $estoque_min;

    public function store(){
        $this->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'marca' => 'required',
            'categoria_id' => 'required',
            'unidade_medida' => 'required',
            'preco_custo' => 'required',
            'preco_venda' => 'required',
            'fornecedor_id' => 'required',
            'quantidade' => 'required',
            'estoque_min' => 'required',
        ]);

        Produto::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'marca' => $this->marca,
            'categoria_id' => $this->categoria_id,
            'unidade_medida' => $this->unidade_medida,
            'preco_custo' => $this->preco_custo,
            'preco_venda' => $this->preco_venda,
            'fornecedor_id' => $this->fornecedor_id,
            'quantidade' => $this->quantidade,
            'estoque_min' => $this->estoque_min,
        ]);

        session()->flash('success', 'Produto cadastrado com sucesso');
        return redirect()->route('produto.index');

    }

    public function render()
    {
        $categorias = Categoria::orderBy('nome')->get();
        $fornecedores = Fornecedor::orderBy('nome')->get();


    return view('livewire.produto.produto-create', compact('categorias', 'fornecedores'));
    }
}

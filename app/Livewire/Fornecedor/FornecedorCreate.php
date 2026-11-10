<?php

namespace App\Livewire\Fornecedor;

use App\Models\Fornecedor;
use Livewire\Component;

class FornecedorCreate extends Component
{
    public $nome;
    public $cpf_cnpj;
    public $telefone;
    public $email;

    public function store(){
        $this->validate([
            'nome' => 'required',
            'cpf_cnpj' => 'required',
            'telefone' => 'required',
            'email' => 'required'
        ]);

        Fornecedor::create([
            'nome' => $this->nome,
            'cpf_cnpj' => $this->cpf_cnpj,
            'telefone' => $this->telefone,
            'email' => $this->email
        ]);

        session()->flash('success', 'Fornecedor cadastrado com sucesso');
        return redirect()->route('fornecedor.index');
    }

    public function render()
    {
        return view('livewire.fornecedor.fornecedor-create');
    }
}

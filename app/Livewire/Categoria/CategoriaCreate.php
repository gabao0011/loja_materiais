<?php

namespace App\Livewire\Categoria;

use App\Models\Categoria;
use Livewire\Component;

class CategoriaCreate extends Component
{
    public $id;
    public $nome;

    public function store(){
        $this->validate([
            'nome' => 'required'
        ]);

        Categoria::create([
            'nome' => $this->nome
        ]);

        session()->flash('success', 'Categoria cadastrada coma sucesso');
        return redirect()->route('categoria.index');
    }
    public function render()
    {
        return view('livewire.categoria.categoria-create');
    }
}

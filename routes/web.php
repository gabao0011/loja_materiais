<?php

use App\Livewire\Auth\Login;
use App\Livewire\Categoria\CategoriaCreate;
use App\Livewire\Categoria\CategoriaIndex;
use App\Livewire\Fornecedor\FornecedorCreate;
use App\Livewire\Fornecedor\FornecedorIndex;
use App\Livewire\Produto\ProdutoCreate;
use App\Livewire\Produto\ProdutoIndex;
use Illuminate\Support\Facades\Route;

Route::get('/login', Login::class)->name('login');
Route::get('/produto', ProdutoIndex::class)->name('produto.index');
Route::get('/produto/create', ProdutoCreate::class)->name('produto.create');
Route::get('/categoria', CategoriaIndex::class)->name('categoria.index');
Route::get('/categoria/create', CategoriaCreate::class)->name('categoria.create');
Route::get('/fornecedor', FornecedorIndex::class)->name('fornecedor.index');
Route::get('/fornecedor/create', FornecedorCreate::class)->name('fornecedor.create');
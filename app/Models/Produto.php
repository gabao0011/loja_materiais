<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'descricao',
        'marca',
        'categoria_id',
        'unidade_medida',
        'preco_custo',
        'preco_venda',
        'fornecedor_id',
        'quantidade',
        'estoque_min'
    ];


    public function categoria(): BelongsTo
{
    return $this->belongsTo(Categoria::class);
}

    public function fornecedor(): BelongsTo
{
    return $this->belongsTo(Fornecedor::class);
}
}

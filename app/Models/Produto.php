<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = "produto";
    use HasFactory;

    protected $fillable = [
        'nome_peca',
        'codigo',
        'tamanho',
        "image",
    ];
    public function produtoCategoria(){
        //relacionamento 1 - n
        return $this->hasMany(ProdutoCategoria::class);
    }
    public function categorias(){
        //relacionamento n - n
        return $this->belongsToMany(CategoriaModel::class,
            'produto_categorias','id');
    }


}
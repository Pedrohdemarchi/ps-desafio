<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'categorias';

    protected $filable = [
        'name'
    ];

    public function Produto()
    {
        return $this->hasMany(Produto::class);
    }
}

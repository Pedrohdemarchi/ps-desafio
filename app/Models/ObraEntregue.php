<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObraEntregue extends Model
{
    use HasFactory;

    protected $table = 'obras_entregues';

    protected $fillable = [
        'imagem',
        'nome_obra',
        'localidade',
    ];
}

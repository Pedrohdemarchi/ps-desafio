<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedbacks';

    protected $fillable = [
        'nome',
        'localidade',
        'nota',
        'comentario',
    ];

    protected $casts = [
        'nota' => 'decimal:1',
    ];
}

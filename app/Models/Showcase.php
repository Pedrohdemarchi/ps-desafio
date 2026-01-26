<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showcase extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_showcase',
        'description_showcase',
        'logo_showcase',
        'image_showcase' 
    ];
}

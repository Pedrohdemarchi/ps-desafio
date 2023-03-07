<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $produto = Produto::all();
        $categoria = Categoria::all();

        return view('site.index', compact('produto', 'categoria'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Driver\Selector;

class SiteController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        $categorias = Categoria::all();

        return view('site.index', compact('produtos', 'categorias'));
    }

    public function productFind(){
        $produtos = Categoria::where('name','LIKE' ("%{$_REQUEST ['search']}%"))->get();
        $categorias=Categoria::all();

        return view('site.index', compact('produtos', 'categorias'));
    }

    public function productFilter(){
        $select = Categoria::where('name',$_REQUEST ['categoria'])->first();
        $produtos = [];
        if(isset($select))
            $produtos = Produto::where('categoria_id',$select->id)->get();
        else
            $produtos = Produto::all();
        $categorias=Categoria::all();

        return view('site.index', compact('produtos', 'categorias', 'select'));
    }

}

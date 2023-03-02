<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoriaRequest;
use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    private $Categoria;

    public function __construct(Categoria $categoria)
    {
        $this->Categoria = $categoria;
    }



    public function index()
    {
        $categorias = $this->Categoria->all();
        return view('categoria.index', compact('categorias'));
    }


    public function create()
    {
        return view(view: 'categoria.crud');
    }


    public function store(StoreCategoriaRequest $request)
    {
        $categoria = new Categoria();
        $categoria->name = $request->input('name');
        $categoria->save();

        return redirect()->route(route: 'categoria.index')->with('Success', 'Nova Plataforma criada com sucesso');
    }

    public function edit($id)
    {
        $categoria = $this->Categoria->find($id);
        return view('categoria.crud', compact('categoria'));
    }

    public function update(UpdateCategoriaRequest $request, $id)
    {
        $categoria = $this->Categoria->find($id);
        $categoria->name = $request->input('name');
        $categoria->save();

        return redirect()->route(route: 'categoria.index')->with('Success', 'A Plataforma foi modificada com sucesso');
    }

    public function destroy($id)
    {
        $Categoria = $this->Categoria->find($id);
        $Categoria->delete();

        return redirect()->route(route: 'categoria.index')->with('Success', 'A Plataforma foi excluida com sucesso');
    }
}

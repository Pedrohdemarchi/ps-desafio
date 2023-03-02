<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProdutoRequest;
use App\Http\Requests\UpdateProdutoRequest;
use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProdutoController extends Controller
{
    private $Produto;
    private $Categoria;

    public function __construct(Categoria $categoria, Produto $produto)
    {
        $this->Categoria = $categoria;
        $this->Produto = $produto;
    }

    public function index()
    {
        $produtos = $this->Produto->all();
        return view('produto.index', compact('produtos'));
    }


    public function create()
    {
        $categorias = $this->Categoria->all();
        return view('produto.crud', compact('categorias'));
    }


    public function store(StoreProdutoRequest $request)
    {
        $produto = new Produto();
        $produto->name = $request->input('name');
        $produto->descricao = $request->input('descricao');
        $produto->quantidade = $request->input('quantidade');
        if ($request->hasFile('image')) {
            $imagem = $request->file('image')->store('produtos', 'public');
        } else {
            return redirect()->back()->withInput($request->all())->with('danger', 'Insira uma foto!');
        }
        $produto->image = $imagem;
        $produto->categoria_id = $request->input('categoria_id');

        $produto->save();

        return redirect()->route('produto.index')->with('Success', 'Novo Jogo criado com sucesso');;
    }


    public function show($id)
    {
        $produto = $this->Produto->find('$id');
        $produto->load('categoria');
        return response()->json($produto);
    }


    public function edit($id)
    {
        $produto = $this->Produto->find($id);
        $categorias = $this->Categoria->all();
        return view('produto.crud', compact('produto', 'categorias'));
    }


    public function update(Request $request, $id)
    {
        $produto = $this->Produto->find($id);
        $produto->name = $request->input('name');
        $produto->descricao = $request->input('descricao');
        $produto->quantidade = $request->input('quantidade');
        if ($request->hasFile('image')) {
            Storage::delete('public/' . $produto->image); //excluindo a imagem
            $imagem = $request->file('image')->store('produto', 'public');
            $produto->image = $imagem;
        }
        $produto->categoria_id = $request->input('categoria_id');
        $produto->save();

        return redirect()->route(route: 'produto.index')->with('Success', 'O Jogo foi modificada com sucesso');
    }

    public function destroy($id)
    {
        $produto = $this->Produto->find($id);
        Storage::delete('public/' . $produto->image);
        $produto->delete();

        return redirect()->route(route: 'produto.index')->with('Success', 'O Jogo foi excluida com sucesso');
    }
}

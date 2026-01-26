<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowcaseController extends Controller
{

    private $showcase;

    public function __construct(Showcase $showcase) {
        $this->showcase = $showcase;
    }

    public function index()
    {
        $showcase = $this->showcase->all();

        return view('showcase.index', compact('showcase'));
    }

    public function create()
    {
        return view('showcase.crud');
    }

    public function store(Request $request)
    {
        $data =  $request->all();
        $this->showcase->create($data);

        return redirect()->route('showcase.index')->with('success','Criado com Sucesso');
    }

    public function show($id)
    {
        $showcase = $this->showcase->find(id);

        return response()->json($showcase);
    }

    public function edit($id)
    {
        $showcase = $this->showcase->find(id);

        return view('showcase.crud', compact('showcase'));
    }

    public function update(Request $request, $id)
    {
        $data =  $request->all();
        $showcase = $this->showcase->find(id);
        $showcase->update($data);

        return redirect()->route('showcase.index')->with('success','Editado com Sucesso');
    }

    public function destroy($id)
    {
        $showcase = $this->showcase->find(id);
        $showcase->delete();

        return redirect()->route('showcase.index')->with('success','Deletado com Sucesso');
    }
}

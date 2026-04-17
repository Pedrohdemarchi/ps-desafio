<?php

namespace App\Http\Controllers;

use App\Models\Showcase;
use Illuminate\Http\Request;

class ShowcaseController extends Controller
{

    private $showcase;

    public function __construct(Showcase $showcase) {
        $this->showcase = $showcase;
    }

    public function index(){
        $showcases = $this->showcase->paginate(10);

        return view('showcase.index', [
            'showcases' => $showcases,
            'activePage' => 'showcase-management'
        ]);
    }

    public function create(){
        return view('showcase.crud', [
            'activePage' => 'showcase-management'
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        // Tratar arquivos
        if ($request->hasFile('logo_showcase')) {
            $data['logo_showcase'] = $request->file('logo_showcase')->store('logos', 'public');
        }

        if ($request->hasFile('image_showcase')) {
            $data['image_showcase'] = $request->file('image_showcase')->store('images', 'public');
        }

        // Garantir que tag_showcase seja array (JSON)
        $data['tag_showcase'] = $request->tag_showcase ?? [];

        // Criar o showcase
        $this->showcase->create($data);

        return redirect()->route('showcase.index')->with('success','Criado com Sucesso');
    }

    public function show($id)
    {
        $showcase = $this->showcase->find($id);

        return response()->json($showcase);
    }

    public function edit($id){
        $showcase = $this->showcase->find($id);

        return view('showcase.crud', [
            'showcase' => $showcase,
            'activePage' => 'showcase-management'
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        // Tratar arquivos
        if ($request->hasFile('logo_showcase')) {
            $data['logo_showcase'] = $request->file('logo_showcase')->store('logos', 'public');
        }

        if ($request->hasFile('image_showcase')) {
            $data['image_showcase'] = $request->file('image_showcase')->store('images', 'public');
        }

        // Garantir que tag_showcase seja array
        $data['tag_showcase'] = $request->tag_showcase ?? [];

        $showcase = $this->showcase->find($id);
        $showcase->update($data);

        return redirect()->route('showcase.index')->with('success','Editado com Sucesso');
    }

    public function destroy($id)
    {
        $showcase = $this->showcase->find($id);
        $showcase->delete();

        return redirect()->route('showcase.index')->with('success','Deletado com Sucesso');
    }
}

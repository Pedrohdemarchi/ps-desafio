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

    public function index()
    {
        $showcases = $this->showcase->all();

        return view('showcase.index', compact('showcases'));
    }

    public function create()
    {
        return view('showcase.crud');
    }

    public function store(Request $request)
    {
        $data =  $request->all();

        // Se enviou arquivo logo_showcase
        if ($request->hasFile('logo_showcase')) {
            // Armazena no disco 'public' dentro da pasta 'logos' (você pode mudar a pasta)
            $data['logo_showcase'] = $request->file('logo_showcase')->store('logos', 'public');
        }

        // Se enviou arquivo image_showcase
        if ($request->hasFile('image_showcase')) {
            $data['image_showcase'] = $request->file('image_showcase')->store('images', 'public');
        }

        $this->showcase->create($data);

        return redirect()->route('showcase.index')->with('success','Criado com Sucesso');
    }

    public function show($id)
    {
        $showcase = $this->showcase->find($id);

        return response()->json($showcase);
    }

    public function edit($id)
    {
        $showcase = $this->showcase->find($id);

        return view('showcase.crud', compact('showcase'));
    }

    public function update(Request $request, $id)
    {
        $data =  $request->all();

        // Se enviou arquivo logo_showcase
        if ($request->hasFile('logo_showcase')) {
            // Armazena no disco 'public' dentro da pasta 'logos' (você pode mudar a pasta)
            $data['logo_showcase'] = $request->file('logo_showcase')->store('logos', 'public');
        }

        // Se enviou arquivo image_showcase
        if ($request->hasFile('image_showcase')) {
            $data['image_showcase'] = $request->file('image_showcase')->store('images', 'public');
        }

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

<?php

namespace App\Http\Controllers;

use App\Models\ObraEntregue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ObraEntregueController extends Controller
{
    public function index()
    {
        return view('obras_entregues.index', [
            'obras' => ObraEntregue::paginate(10),
            'activePage' => 'obras-entregues-management',
        ]);
    }

    public function create()
    {
        return view('obras_entregues.crud', [
            'activePage' => 'obras-entregues-management',
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validatedData($request);
        $data['imagem'] = $request->file('imagem')->store('obras', 'public');

        ObraEntregue::create($data);

        return redirect()->route('obras-entregues.index')->with('success', 'Obra criada com sucesso.');
    }

    public function edit(ObraEntregue $obras_entregue)
    {
        return view('obras_entregues.crud', [
            'obra' => $obras_entregue,
            'activePage' => 'obras-entregues-management',
        ]);
    }

    public function update(Request $request, ObraEntregue $obras_entregue)
    {
        $data = $this->validatedData($request, false);

        if ($request->hasFile('imagem')) {
            $oldImage = $obras_entregue->imagem;
            $data['imagem'] = $request->file('imagem')->store('obras', 'public');
            $obras_entregue->update($data);
            Storage::disk('public')->delete($oldImage);
        } else {
            $obras_entregue->update($data);
        }

        return redirect()->route('obras-entregues.index')->with('success', 'Obra editada com sucesso.');
    }

    public function destroy(ObraEntregue $obras_entregue)
    {
        $image = $obras_entregue->imagem;
        $obras_entregue->delete();
        Storage::disk('public')->delete($image);

        return redirect()->route('obras-entregues.index')->with('success', 'Obra excluída com sucesso.');
    }

    private function validatedData(Request $request, bool $imageRequired = true): array
    {
        return $request->validate([
            'imagem' => [
                $imageRequired ? 'required' : 'nullable',
                'image',
                'mimes:jpg,jpeg,png,gif,webp',
                'max:10240',
            ],
            'nome_obra' => ['required', 'string', 'max:255'],
            'localidade' => ['required', 'string', 'max:255'],
        ]);
    }
}

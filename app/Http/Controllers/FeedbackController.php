<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('feedbacks.index', [
            'feedbacks' => Feedback::paginate(10),
            'activePage' => 'feedback-management',
        ]);
    }

    public function create()
    {
        return view('feedbacks.crud', [
            'activePage' => 'feedback-management',
        ]);
    }

    public function store(Request $request)
    {
        Feedback::create($this->validatedData($request));

        return redirect()->route('feedback.index')->with('success', 'Feedback criado com sucesso.');
    }

    public function edit(Feedback $feedback)
    {
        return view('feedbacks.crud', [
            'feedback' => $feedback,
            'activePage' => 'feedback-management',
        ]);
    }

    public function update(Request $request, Feedback $feedback)
    {
        $feedback->update($this->validatedData($request));

        return redirect()->route('feedback.index')->with('success', 'Feedback editado com sucesso.');
    }

    public function destroy(Feedback $feedback)
    {
        $feedback->delete();

        return redirect()->route('feedback.index')->with('success', 'Feedback excluído com sucesso.');
    }

    private function validatedData(Request $request): array
    {
        return $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'localidade' => ['required', 'string', 'max:255'],
            'nota' => ['required', 'numeric', 'min:0', 'max:5', 'regex:/^\d+(\.\d)?$/'],
            'comentario' => ['required', 'string', 'max:2000'],
        ]);
    }
}

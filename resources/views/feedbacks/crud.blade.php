@extends('layouts.app', ['activePage' => 'feedback-management', 'titlePage' => __('Feedbacks')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST"
                        action="{{ isset($feedback) ? route('feedback.update', $feedback) : route('feedback.store') }}">
                        @csrf
                        @if (isset($feedback))
                            @method('PUT')
                        @endif

                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">
                                    {{ isset($feedback) ? __('Editar Feedback') : __('Criar Feedback') }}
                                </h4>
                                <p class="card-category">{{ __('Informações do feedback') }}</p>
                            </div>
                            <div class="card-body">
                                @include('feedbacks.formulario', ['feedback' => $feedback ?? null])
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-success">{{ __('Salvar') }}</button>
                                <a href="{{ route('feedback.index') }}" class="btn btn-secondary">{{ __('Voltar') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

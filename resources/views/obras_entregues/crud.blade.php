@extends('layouts.app', ['activePage' => 'obras-entregues-management', 'titlePage' => __('Obras Entregues')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" enctype="multipart/form-data"
                        action="{{ isset($obra) ? route('obras-entregues.update', $obra) : route('obras-entregues.store') }}">
                        @csrf
                        @if (isset($obra))
                            @method('PUT')
                        @endif

                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">
                                    {{ isset($obra) ? __('Editar Obra') : __('Criar Obra') }}
                                </h4>
                                <p class="card-category">{{ __('Informações da obra entregue') }}</p>
                            </div>
                            <div class="card-body">
                                @include('obras_entregues.formulario', ['obra' => $obra ?? null])
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-success">{{ __('Salvar') }}</button>
                                <a href="{{ route('obras-entregues.index') }}" class="btn btn-secondary">{{ __('Voltar') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

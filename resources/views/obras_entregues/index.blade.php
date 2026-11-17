@extends('layouts.app', ['activePage' => 'obras-entregues-management', 'titlePage' => __('Obras Entregues')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <a class="float-right" href="{{ route('obras-entregues.create') }}">
                                <button type="button" title="{{ __('Adicionar obra') }}" class="btn btn-primary add-button">
                                    <i class="material-icons">add_circle_outline</i>{{ __('Adicionar') }}
                                </button>
                            </a>
                            <h4 class="card-title">{{ __('Obras Entregues') }}</h4>
                            <p class="card-category">{{ __('Lista de todas as obras entregues') }}</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table datatable">
                                    <thead class="text-primary">
                                        <tr>
                                            <th>ID</th>
                                            <th>{{ __('Imagem') }}</th>
                                            <th>{{ __('Nome da obra') }}</th>
                                            <th>{{ __('Localidade') }}</th>
                                            <th>{{ __('Ações') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($obras as $obra)
                                            <tr>
                                                <td>{{ $obra->id }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/' . $obra->imagem) }}"
                                                        alt="{{ $obra->nome_obra }}" style="max-width: 120px; max-height: 80px;">
                                                </td>
                                                <td>{{ $obra->nome_obra }}</td>
                                                <td>{{ $obra->localidade }}</td>
                                                <td class="text-nowrap">
                                                    <a href="{{ route('obras-entregues.edit', $obra) }}">
                                                        <button type="button" title="{{ __('Editar') }}" class="btn btn-warning">
                                                            <i class="material-icons" style="color: white">edit</i>
                                                        </button>
                                                    </a>
                                                    <form action="{{ route('obras-entregues.destroy', $obra) }}" method="POST"
                                                        class="d-inline"
                                                        onsubmit="return confirm('{{ __('Tem certeza de que deseja excluir esta obra?') }}')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" title="{{ __('Excluir') }}" class="btn btn-danger">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $obras->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

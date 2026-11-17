@extends('layouts.app', ['activePage' => 'feedback-management', 'titlePage' => __('Feedbacks')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <a class="float-right" href="{{ route('feedback.create') }}">
                                <button type="button" title="{{ __('Adicionar feedback') }}" class="btn btn-primary add-button">
                                    <i class="material-icons">add_circle_outline</i>{{ __('Adicionar') }}
                                </button>
                            </a>
                            <h4 class="card-title">{{ __('Feedbacks dos Clientes') }}</h4>
                            <p class="card-category">{{ __('Lista de todos os feedbacks') }}</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table datatable">
                                    <thead class="text-primary">
                                        <tr>
                                            <th>ID</th>
                                            <th>{{ __('Nome') }}</th>
                                            <th>{{ __('Localidade') }}</th>
                                            <th>{{ __('Nota') }}</th>
                                            <th>{{ __('Comentário') }}</th>
                                            <th>{{ __('Ações') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($feedbacks as $feedback)
                                            <tr>
                                                <td>{{ $feedback->id }}</td>
                                                <td>{{ $feedback->nome }}</td>
                                                <td>{{ $feedback->localidade }}</td>
                                                <td>{{ number_format((float) $feedback->nota, 1, ',', '.') }}</td>
                                                <td>{{ $feedback->comentario }}</td>
                                                <td class="text-nowrap">
                                                    <a href="{{ route('feedback.edit', $feedback) }}">
                                                        <button type="button" title="{{ __('Editar') }}" class="btn btn-warning">
                                                            <i class="material-icons" style="color: white">edit</i>
                                                        </button>
                                                    </a>
                                                    <form action="{{ route('feedback.destroy', $feedback) }}" method="POST"
                                                        class="d-inline"
                                                        onsubmit="return confirm('{{ __('Tem certeza de que deseja excluir este feedback?') }}')">
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
                            {{ $feedbacks->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app', ['activePage' => 'showcase-management', 'titlePage' => __('Showcase')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <a class="float-right" href="{{ route('showcase.create') }}">
                                <button type="button" title="{{ __('Add showcase') }}" class="btn btn-primary add-button">
                                    <i class="material-icons">add_circle_outline</i>{{ __('Adicionar') }}
                                </button>
                            </a>
                            <h4 class="card-title ">{{ __('Serviços da Vitrine') }}</h4>
                            <p class="card-category">{{ __('Lista de todos os serviços') }}</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table datatable">
                                    <thead class=" text-primary">
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            {{ __('Titulo') }}
                                        </th>
                                        <th>
                                            {{ __('Ações') }}
                                        </th>
                                    </thead>
                                    <tbody>
                                        @foreach ($showcases as $showcase)
                                            <tr>
                                                <td>{{ $showcase->id }}</td>
                                                <td>{{ $showcase->title_showcase }}</td>
                                                <td>
                                                    <!-- botao editar -->
                                                    <a href="{{ route('showcase.edit', $showcase->id) }}">
                                                        <button type="button" title="{{ __('Edit') }}"
                                                            class="btn btn-warning">
                                                            <i class="material-icons" style="color: white">edit</i>
                                                        </button>
                                                    </a>
                                                    <!-- Botao apagar -->
                                                    <button type="button" title="{{ __('Delete') }}" data-toggle="modal"
                                                        data-target="#modal-excluir" data-id="{{ $showcase->id }}"
                                                        class="btn btn-danger">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                    <!-- Botao visualizar -->
                                                    <button type="button" title="{{ __('Visualizar') }}"
                                                        data-toggle="modal" data-target="#modal-detalhes"
                                                        data-id="{{ $showcase->id }}" class="btn btn-danger">
                                                        <i class="material-icons">visibility</i>
                                                    </button>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal excluir -->
        <div id="modal-excluir" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Confirmação</h5>
                    </div>
                    <div class="modal-body" align="center">Tem certeza de que quer excluir?
                    </div>
                    <div id="excluir-associate" style="text-align: center"></div>
                    <style type="text/css">
                        p.bold-red {
                            color: red;
                            font-weight: bold;
                        }

                    </style>
                    <div class="modal-footer">
                        <form id="form-excluir" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')


                        </form>
                        <button type="submit" form="form-excluir" class="btn btn-danger">Excluir</button>
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal visualizar -->

        <div id="modal-detalhes" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Visualização</h5>
                    </div>

                    <div class="modal-body">
                        <div class="row">

                            <div class="form-group col-md-12 col-sm-12">
                                <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Titulo</h5>
                                <input type="string" id="detalhes-title_showcase" name="detalhes-title_showcase" class="form-control" readonly>
                            </div>

                            <div class="form-group col-md-12 col-sm-12">
                                <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Descrição</h5>
                                <input type="text" id="detalhes-description_showcase" name="detalhes-description_showcase" class="form-control"
                                    readonly>
                            </div>

                            <img id="detalhes-logo_showcase" class="form-group col-md-6 col-sm-12" />

                            <img id="detalhes-image_showcase" class="form-group col-md-6 col-sm-12" />

                        </div>
                    </div>
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@push('js')
    <!-- Scripts Here -->
    <script>
        /* js para abrir Modal de Detalhes de forma dinâmica com as informações desejadas */
        $('#modal-detalhes').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            let modal = $(this)
            const id = button.data('id')
            const url = 'showcase/' + id
            $.getJSON(url, (resposta) => {
                console.log(resposta);
                $("#detalhes-title_showcase").val(resposta.title_showcase);
                $("#detalhes-description_showcase").val(resposta.description_showcase);
                $("#detalhes-logo_showcase").attr('src', '/storage/' + resposta.logo_showcase);
                $("#detalhes-image_showcase").attr('src', '/storage/' + resposta.image_showcase);
            });
        })
        /* js para abrir Modal de excluir de forma dinâmica */
        $('#modal-excluir').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            const id = button.data('id')
            const url2 = 'showcase/' + id
            $('#form-excluir').attr('action', 'showcase/' + id)
        })
    </script>
@endpush

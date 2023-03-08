@extends('layouts.site.site')

@section('title')
Pedrão Hamburgueria
@endsection

@section('content')
    <section class="produto-container">
        <div class="produto-content">
            <div class="title-product">
                <h1>Guarnições disponiveis:</h1>
                <form class="select" action="productFilter">
                    <div class="select-container">
                        <label for="categoria">Filtrar por categoria:</label>
                        <select name="categoria" id="categoria">
                            <option class="selecione" value="default">Selecione uma categoria</option>
                            <option value="">Mostrar todas</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria['name'] }}">{{ $categoria['name'] }}</option>
                            @endforeach
                        </select>
                        <input type="submit" value="filtrar">
                    </div>
                </form>
            </div>
            <div class="product">
                @isset($produtos)
                    @if (count($produtos))
                        @foreach ($produtos as $produto)
                            <div class="each-product">
                                <div class="image-container">
                                    <img src="/storage/{{ $produto['image'] }}">
                                </div>
                                <div class="info-product">
                                    <h1>{{ $produto['name'] }}</h1>
                                    <p>{{ $produto->categoria->name}}</p>
                                    <p>${{ $produto['preco'] }}</p>
                                    <p>{{ $produto['quantidade'] }} unidades</p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="no-produto">Sem produtos</p>
                    @endif
                @endisset
            </div>
        </div>
    </section>
@endsection


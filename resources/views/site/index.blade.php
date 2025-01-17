@extends('layouts.site.site')

@section('title')
Pedrão Hamburgueria
@endsection

@section('content')
    <section class="site-container">
        <div class="body-slide">
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">

                    <div class="slide first">
                        <img src="{{asset("site/img/S1.png")}}" alt="imagem 1">
                    </div>
                    <div class="slide">
                        <img src="{{asset("site/img/S2.png")}}" alt="imagem 2">
                    </div>
                    <div class="slide">
                        <img src="{{asset("site/img/S3.png")}}" alt="imagem 3">
                    </div>

                    <div class="navegation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                    </div>

                </div>

                <div class="manual-navegation">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                </div>
            </div>
        </div>
        <div class="product-content">
            <div class="title-product">
                <h1>Guarnições da casa:</h1>
                <form class="select" action="{{ route('productFilter')}}">
                    <div class="select-container">
                        <label for="categoria">Filtrar:</label>
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
                            <div class="{{ $produto['quantidade'] == 0 ? 'each-product0' : 'each-product'}}" id="{{ $produto->id }}">
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
                            <div class="janela-modal" id="janela-modal{{ $produto->id }}">
                                <div class="modal">
                                    <button class="fechar" id="fechar{{ $produto->id }}">X</button>
                                    <h1>Descrição do {{ $produto['name'] }}:</h1>
                                    <br>
                                    <p>{{ $produto->descricao }}</p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="no-product">Sem produtos</p>
                    @endif
                @endisset
            </div>
        </div>
    </section>
@endsection


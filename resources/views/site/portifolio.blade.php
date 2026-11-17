@extends('layouts.site.site')

@section('titulo')
    Portifólio - ML Faria Engenharia de Estruturas
@endsection

@section('conteudo')

<section class="sobre-banner">
    <h1>
        <span>PROJETOS</span>
        <strong>ENTREGUES</strong>
    </h1>
</section>

<section class="numbers-section">

    <div class="numbers-grid">

        <!-- ITEM 1 -->
        <div class="number-card">
            <strong>+25</strong>
            <span>CLIENTES SATISFEITOS</span>
        </div>

        <!-- ITEM 2 -->
        <div class="number-card">
            <strong>+40</strong>
            <span>PROJETOS ENTREGUES</span>
        </div>

        <!-- ITEM 3 -->
        <div class="number-card">
            <strong>+150 MIL</strong>
            <span>M² PROJETADOS</span>
        </div>

        <!-- ITEM 4 -->
        <div class="number-card">
            <strong>+15</strong>
            <span>ANOS DE EXPERIÊNCIA</span>
        </div>

    </div>

</section>

<section class="services-section">

    <div class="services-container">

        <!-- CABEÇALHO -->
        <div class="services-header">

            <span class="services-label">
                SERVIÇOS
            </span>

            <h2>
                ÁREAS DE ATUAÇÃO
            </h2>

        </div>


        <!-- CARDS -->
        <div class="services-grid">

            <div class="service-card">
                <div class="service-title">
                    <span>PROJETOS</span>
                    <strong>CIVIS</strong>
                </div>
            </div>

            <div class="service-card">
                <div class="service-title">
                    <span>ESTUDOS DE</span>
                    <strong>VIABILIDADE</strong>
                </div>
            </div>

            <div class="service-card">
                <div class="service-title">
                    <span>PLANO</span>
                    <strong>ORÇAMENTÁRIO</strong>
                </div>
            </div>

            <div class="service-card">
                <div class="service-title">
                    <span>PLANEJAMENTO</span>
                    <strong>DE OBRA</strong>
                </div>
            </div>

            <div class="service-card">
                <div class="service-title">
                    <span>GERENCIAMENTO</span>
                    <strong>DE OBRA</strong>
                </div>
            </div>

            <div class="service-card">
                <div class="service-title">
                    <span>EXECUÇÃO</span>
                    <strong>DE OBRA</strong>
                </div>
            </div>

        </div>

    </div>

</section>

<section class="projetos-section">

    <div class="projetos-container">

        <div class="projetos-heading">
            <span>PROJETOS</span>
            <h2>OBRAS ENTREGUES</h2>
        </div>

        <div class="projetos-carousel">
            @forelse ($obras as $index => $obra)
                <div class="projeto-slide{{ $index === 0 ? ' active' : '' }}">
                    <img src="{{ asset('storage/' . $obra->imagem) }}" alt="{{ $obra->nome_obra }}">

                    <div class="projeto-info">
                        <h3>{{ $obra->nome_obra }}</h3>

                        <div class="projeto-local">
                            <span class="projeto-detalhe"></span>
                            <span>{{ $obra->localidade }}</span>
                        </div>
                    </div>
                </div>
            @empty
                <p>{{ __('Ainda não há obras entregues cadastradas.') }}</p>
            @endforelse

        </div>

        @if ($obras->count() > 1)
            <div class="projetos-indicadores">
                @foreach ($obras as $index => $obra)
                    <button class="indicador{{ $index === 0 ? ' active' : '' }}"
                        data-slide="{{ $index }}"
                        aria-label="{{ __('Ver obra') }} {{ $index + 1 }}: {{ $obra->nome_obra }}"></button>
                @endforeach
            </div>
        @endif

    </div>

</section>

<section class="clientes-section">

    <div class="clientes-carousel">

        <div class="clientes-track">

            <!-- PRIMEIRA SEQUÊNCIA -->
            <div class="cliente-logo">
                <img src="{{ asset('video/logo-1.png') }}" alt="Cliente 1">
            </div>

            <div class="cliente-logo">
                <img src="{{ asset('video/logo-2.png') }}" alt="Cliente 2">
            </div>

            <div class="cliente-logo">
                <img src="{{ asset('video/logo-3.png') }}" alt="Cliente 3">
            </div>

            <div class="cliente-logo">
                <img src="{{ asset('video/logo-4.png') }}" alt="Cliente 4">
            </div>

            <div class="cliente-logo">
                <img src="{{ asset('video/logo-5.png') }}" alt="Cliente 5">
            </div>

            <!-- SEGUNDA SEQUÊNCIA: REPETIÇÃO PARA LOOP INFINITO -->
            <div class="cliente-logo" aria-hidden="true">
                <img src="{{ asset('video/logo-1.png') }}" alt="">
            </div>

            <div class="cliente-logo" aria-hidden="true">
                <img src="{{ asset('video/logo-2.png') }}" alt="">
            </div>

            <div class="cliente-logo" aria-hidden="true">
                <img src="{{ asset('video/logo-3.png') }}" alt="">
            </div>

            <div class="cliente-logo" aria-hidden="true">
                <img src="{{ asset('video/logo-4.png') }}" alt="">
            </div>

            <div class="cliente-logo" aria-hidden="true">
                <img src="{{ asset('video/logo-5.png') }}" alt="">
            </div>

        </div>

    </div>

</section>

@endsection
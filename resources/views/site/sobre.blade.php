
@extends('layouts.site.site')

@section('titulo')
    Sobre Nós - ML Faria Engenharia de Estruturas
@endsection

@section('conteudo')

<section class="sobre-banner">
    <h1>
        <span>SOBRE A</span>
        <strong>ML FARIA</strong>
    </h1>
</section>

<section class="sobre-institucional">

    {{-- LADO ESQUERDO: IMAGEM --}}
    <div class="sobre-institucional__imagem">

        <img src="{{ asset('video/SobreNos1.png') }}" alt="ML Faria Engenharia">

    </div>

    {{-- LADO DIREITO: CONTEÚDO --}}
    <div class="sobre-institucional__conteudo">

        {{-- MISSÃO --}}
        <article class="sobre-item">
            <h2>Missão</h2>

            <div class="sobre-item__linha">
                <span class="sobre-item__losango"></span>
                <span class="sobre-item__destaque"></span>
                <span class="sobre-item__traco"></span>
                <span class="sobre-item__losango final"></span>
            </div>

            <p>
                Desenvolver soluções estruturais de excelência em segurança
                e economia e ajudar na revalorização da Engenharia Nacional.
            </p>
        </article>

        {{-- VISÃO --}}
        <article class="sobre-item">
            <h2>Visão</h2>

            <div class="sobre-item__linha">
                <span class="sobre-item__losango"></span>
                <span class="sobre-item__destaque"></span>
                <span class="sobre-item__traco"></span>
                <span class="sobre-item__losango final"></span>
            </div>

            <p>
                Se tornar uma empresa referência em Engenharia de Estruturas
                em todo o país.
            </p>
        </article>

        {{-- VALORES --}}
        <article class="sobre-item">
            <h2>Valores</h2>

            <div class="sobre-item__linha">
                <span class="sobre-item__losango"></span>
                <span class="sobre-item__destaque"></span>
                <span class="sobre-item__traco"></span>
                <span class="sobre-item__losango final"></span>
            </div>

            <p>
                Ética, respeito, honestidade, justiça, comprometimento,
                trabalho, excelência e paixão pela profissão.
            </p>
        </article>

    </div>

</section>


{{-- SEÇÃO: UM LEGADO DE EXCELÊNCIA --}}

<section class="sobre-legado">

    {{-- LADO ESQUERDO: TEXTO --}}
    <div class="sobre-legado__conteudo">

        <h2>
            Um Legado
            <br>
            de Excelência
        </h2>

        <div class="sobre-legado__textos">

            <p>
                Nascemos em 2019 com o objetivo de entregar o melhor e mais avançado
                da engenharia de estruturas a todos os empreendimentos sob nossa
                responsabilidade.
            </p>

            <p>
                Atendimento rigoroso às normas técnicas, boas práticas de engenharia,
                constante atualização e processos bem definidos são algumas
                características que fazem com que nossos projetos tenham um alto nível
                de qualidade.
            </p>

            <p>
                Como diretor técnico, Douglas possui graduação pela Universidade Federal
                do Espírito Santo (2015), além de diversos cursos e treinamentos realizados
                com foco em estruturas.
            </p>

            <p>
                Possui ampla experiência em projetos de edifícios residenciais e comerciais
                de grande porte, projetos de supermercados, estruturas metálicas de
                grande porte, além de projetos industriais para refinarias de petróleo.
            </p>

            <p>
                Em seu currículo, atuou por dois escritórios de referência a nível nacional e
                atuação com a gerência de projetos da Petrobras (EBD). Com longa e
                diversificada experiência, a ML Faria se diferencia no mercado pela sua
                qualidade de atendimento e capacidade de desenvolver soluções técnicas.
            </p>

        </div>

    </div>

    {{-- LADO DIREITO: IMAGEM --}}
    <div class="sobre-legado__imagem">

        {{-- Imagem da seção --}}
        <img src="{{ asset('video/SobreNos1.png') }}" alt="Engenharia ML Faria">

    </div>

</section>


{{-- SEÇÃO: TRADIÇÃO E RESULTADOS --}}

<section class="sobre-tradicao">

    <div class="tradicao-container">

        {{-- PARTE SUPERIOR --}}
        <div class="tradicao-topo">

            {{-- TEXTO INSTITUCIONAL --}}
            <div class="tradicao-descricao">

                <h2>Tradição</h2>

                <p>
                    Fundada em 2019 pelo engenheiro civil Douglas Nunes Faria,
                    a empresa possui um corpo técnico altamente qualificado e
                    experiente, além de utilizar tecnologias avançadas e
                    atualizadas para o auxílio no desenvolvimento das atividades,
                    características que garantem a entrega de soluções estruturais
                    de excelência para cada empreendimento.
                </p>

            </div>

            {{-- INDICADORES --}}
            <div class="tradicao-indicadores">

                <div class="indicador-card indicador-verde">
                    <span class="indicador-numero">15+</span>
                    <span class="indicador-legenda">ANOS DE EXPERIÊNCIA</span>
                </div>

                <div class="indicador-card indicador-preto">
                    <span class="indicador-numero">95</span>
                    <span class="indicador-legenda">PROJETOS ENTREGUES</span>
                </div>

                <div class="indicador-card indicador-azul">
                    <div class="indicador-principal">
                        <div>
                            <span class="indicador-numero">1M+</span>
                            <span class="indicador-legenda">CLIENTES SATISFEITOS</span>
                        </div>

                        <a href="#projetos" class="indicador-link">VER</a>
                    </div>

                    <div class="indicador-barra"></div>
                </div>

            </div>

        </div>

        {{-- GALERIA DE PROJETOS --}}
        <div class="tradicao-projetos" id="projetos">

            <h3>SAIBA MAIS</h3>

            <div class="tradicao-galeria">

                <a href="#" class="tradicao-projeto">
                    <img src="{{ asset('video/projeto-1.png') }}" alt="Projeto ML Faria">
                </a>

                <a href="#" class="tradicao-projeto">
                    <img src="{{ asset('video/projeto-2.png') }}" alt="Projeto ML Faria">
                </a>

                <a href="#" class="tradicao-projeto">
                    <img src="{{ asset('video/projeto-3.png') }}" alt="Projeto ML Faria">
                </a>

            </div>

        </div>

    </div>

</section>


@endsection

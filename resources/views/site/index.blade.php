@extends('layouts.site.site')

@section('titulo')
    ML Faria - Engenharia de Estruturas
@endsection

@section('conteudo')

    <div class="carousel">
        <div class="carousel-track">

            <img src="{{ asset('video/Carossel1.png') }}" class="carousel-image">
            <img src="{{ asset('video/Carossel2.png') }}" class="carousel-image">

        </div>
    </div>

    <section class="about-section">

        <!-- IMAGEM -->
        <div class="about-image">
            <img 
                src="{{ asset('video/SobreNos.png') }}" 
                alt="ML Faria - Engenharia de Estruturas"
            >
        </div>

        <!-- CONTEÚDO -->
        <div class="about-content">

            <div class="about-text">

                <span class="about-label">
                    ENGENHARIA DE ESTRUTURAS
                </span>

                <h2>
                    ML FARIA
                </h2>

                <div class="about-description">

                    <p>
                        A ML Faria é uma empresa especializada na elaboração de projetos estruturais para os setores residencial, comercial e industrial.
                    </p>

                    <p>
                        Fundada em 2019 pelo engenheiro civil Douglas Nunes Faria, a empresa possui um corpo técnico altamente qualificado e experiente, além de utilizar tecnologias avançadas e atualizadas para o auxílio no desenvolvimento das atividades, características que garantem a entrega de soluções estruturais tecnicamente eficientes e de excelência para cada empreendimento.
                    </p>

                    <p>
                        Com um atendimento exclusivo e diferenciado para todos os clientes, nossa equipe está à disposição para estruturar o empreendimento da sua empresa.
                    </p>

                    <p>
                        Atenciosamente, a direção.
                    </p>

                </div>

                <div class="about-buttons">

                    <button 
                        class="btn-primary"
                        onclick="openPage('{{ route('SobreNos') }}')"
                    >
                        Sobre nós
                    </button>

                    <button 
                        class="btn-secondary"
                        onclick="window.open('https://api.whatsapp.com/send/?phone=5527998189472', '_blank')"
                    >
                        Solicitar Orçamento
                    </button>

                </div>

            </div>

        </div>

    </section>

    <section class="feedback-section">

        <div class="feedback-container">

            <!-- TÍTULO -->
            <h2 class="feedback-title">
                Feedbacks dos Clientes
            </h2>


            <div class="feedback-grid">
                @forelse ($feedbacks as $feedback)
                    <div class="feedback-card">
                        <div class="feedback-header">
                            <div class="feedback-user">
                                <div class="feedback-avatar"></div>
                                <div class="feedback-user-info">
                                    <strong>{{ $feedback->nome }}</strong>
                                    <span>{{ $feedback->localidade }}</span>
                                </div>
                            </div>
                            <div class="feedback-rating">
                                {{ number_format((float) $feedback->nota, 1, '.', '') }}
                            </div>
                        </div>
                        <p class="feedback-text">{{ $feedback->comentario }}</p>
                    </div>
                @empty
                    <p class="feedback-text">{{ __('Ainda não há feedbacks cadastrados.') }}</p>
                @endforelse
            </div>

        </div>


        <!-- ELEMENTOS DECORATIVOS INFERIORES -->
        <div class="feedback-decoration">
            <img src="{{ asset('video/cubo.png') }}">
            <img src="{{ asset('video/cubo.png') }}">
            <img src="{{ asset('video/cubo.png') }}">
            <img src="{{ asset('video/cubo.png') }}">
            <img src="{{ asset('video/cubo.png') }}">
            <img src="{{ asset('video/cubo.png') }}">
            <img src="{{ asset('video/cubo.png') }}">
            <img src="{{ asset('video/cubo.png') }}">
            <img src="{{ asset('video/cubo.png') }}">
            <img src="{{ asset('video/cubo.png') }}">
            <img src="{{ asset('video/cubo.png') }}">
            <img src="{{ asset('video/cubo.png') }}">
            <img src="{{ asset('video/cubo.png') }}">
            <img src="{{ asset('video/cubo.png') }}">
            <img src="{{ asset('video/cubo.png') }}">
            <img src="{{ asset('video/cubo.png') }}">
        </div>

    </section>


    <section class="advantages-section">

        <!-- IMAGEM LATERAL -->
        <div class="advantages-image">
            <img
                src="{{ asset('video/Diferenciais.png') }}"
                alt="Estrutura metálica em execução - ML Faria"
            >
        </div>

        <!-- CONTEÚDO -->
        <div class="advantages-content">

            <div class="advantages-list">

                <!-- ITEM 1 -->
                <div class="advantage-item">

                    <div class="advantage-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <div class="advantage-text">
                        <h3>Tecnologia Avançada e Análises Refinadas</h3>

                        <p>
                            Softwares modernos, processos bem definidos, modelagens realistas e conhecimento técnico profundo garantem soluções estruturais eficientes, econômicas e seguras.
                        </p>
                    </div>

                </div>

                <!-- ITEM 2 -->
                <div class="advantage-item">

                    <div class="advantage-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <div class="advantage-text">
                        <h3>Experiência Comprovada</h3>

                        <p>
                            Ampla atuação em projetos de grande porte e em diferentes sistemas construtivos, confirmando nossa experiência e capacidade técnica.
                        </p>
                    </div>

                </div>

                <!-- ITEM 3 -->
                <div class="advantage-item">

                    <div class="advantage-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <div class="advantage-text">
                        <h3>Conhecimento Técnico Contínuo</h3>

                        <p>
                            Nossa equipe está em constante atualização, buscando ampliar conhecimentos por meio de cursos, bibliografias técnicas e dedicação total à engenharia de estruturas.
                        </p>
                    </div>

                </div>

                <!-- ITEM 4 -->
                <div class="advantage-item">

                    <div class="advantage-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <div class="advantage-text">
                        <h3>Excelência em Engenharia de Estruturas</h3>

                        <p>
                            Com anos de atuação no mercado e mais de uma década de experiência no setor, entregamos excelência em cada projeto, atendendo grandes construtoras e incorporadoras com comprometimento e qualidade.
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </section>


@endsection
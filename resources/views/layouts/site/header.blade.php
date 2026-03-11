<header class="header">
    <div class="container">

        <!-- Logo -->
        <div class="logo" onclick="openPage('http://localhost:8000/Kook')">
            LOGO
        </div>

        <!-- Menu Central -->
        <nav class="menu">
            <a href="#" onclick="openPage('http://localhost:8000/Kook')">Home</a>
            <a href="#">Legado</a>
            <a href="#">Cases</a>

            <div class="dropdown">
                <a href="#" class="dropbtn">Soluções</a>

                <div class="dropdown-content">
                    @isset($showcases)
                        @if(count($showcases))

                            <!-- COLUNA ESQUERDA -->
                            <div class="b1">
                                <div class="title_drop">SOLUÇÕES</div>

                                <div class="subtitle_drop">
                                    @foreach ($showcases as $key => $showcase)
                                        <a href="#" class="menu-item" data-index="{{ $key }}">
                                            {{ $showcase['subtitle_showcase'] }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                            <img src="{{ asset('video/RetaV.png') }}" class="retaV">
                            <!-- COLUNA DIREITA -->
                            <div class="b2">

                                @php
                                    $showcase = $showcases[0];
                                @endphp

                                <div class="leftdrop">

                                    <div class="title_drop">MERGULHE</div>

                                    <div class="subtitle_drop" id="b2-content">

                                        <div id="b2-wrapper">

                                            <!-- LAYER ATIVA -->
                                            <div class="b2-layer active" id="layerA">
                                                <div class="separador">
                                                    <a href="#" class="title-b2">
                                                        {{ $showcase['subtitle_showcase'] }}
                                                    </a>
                                                    <a href="#" class="description-drop">
                                                        {{ $showcase['subdescription_showcase'] }}
                                                    </a>
                                                </div>
                                                <div class="tag_block">

                                                    <div class="tag_blockL">
                                                        @foreach (array_slice($showcase['tag_showcase'], 0, 3) as $tag)
                                                            <a href="#">{{ $tag }}</a>
                                                        @endforeach
                                                    </div>

                                                    <div class="tag_blockR">
                                                        @foreach (array_slice($showcase['tag_showcase'], 3, 6) as $tag)
                                                            <a href="#">{{ $tag }}</a>
                                                        @endforeach
                                                    </div>

                                                </div>

                                            </div>

                                            <!-- LAYER PARA TRANSIÇÃO -->
                                            <div class="b2-layer" id="layerB"></div>

                                        </div>

                                    </div>

                                </div>

                                <!-- IMAGEM -->
                                <div class="rightdrop">
                                    <div id="image-wrapper">

                                        <img src="{{ asset('storage/' . $showcase['image_showcase']) }}" 
                                        class="image-layer active" id="imageA">

                                        <img class="image-layer" id="imageB">

                                    </div>
                                </div>

                            </div>

                        @else
                            <div class="no-showcase">
                                Sem nenhum serviço cadastrado.
                            </div>
                        @endif
                    @endisset
                </div>
            </div>
        </nav>

        <!-- CONTATO -->
        <div class="login">
            <span>Contato</span>
        </div>

    </div>
</header>


<!-- HERO -->
<section class="hero">

    <video autoplay muted loop playsinline class="video-bg">
        <source src="{{ asset('video/Looping.mp4') }}" type="video/mp4">
    </video>

    <div class="overlay"></div>

    <div class="centralizador">

        <div class="hero-content">

            <h2 class="yellow-slogan">
                <img src="{{ asset('video/Rectangle.png') }}" class="reta">
                Sonhando acordado
            </h2>

            <h2 class="white-slogan">
                Não deixe o mar <br>
                te ENGOLIR.
            </h2>

            <div class="scroll-down">
                <p>scroll down</p>

                <span class="material-symbols-outlined">
                    expand_more
                </span>
            </div>

        </div>

    </div>

</section>


<!-- DATA PARA O JS -->
<div
    id="showcases-data"
    style="display:none;"
    data-showcases='@json($showcases)'
></div>
<header class="header">
    <div class="container">

        <!-- Logo -->
        <div class="logo" onclick="openPage('http://localhost:8000/Kook')">
            LOGO
        </div>

        <!-- Menu Central -->
        <nav class="menu">
            <a href="#" onclick="openPage('http://localhost:8000/Kook')">Home</a>
            <div class="dropdown">
                <a href="#" class="dropbtn">Cases</a>
                <div class="dropdown-content">
                    @isset($showcases)
                        @if(count($showcases))
                            @foreach ($showcases as $showcase)
                                <a href="#">{{$showcase['title_showcase']}}</a>
                            @endforeach
                        @else
                            <div class="no-showcase">Sem nenhum serviço cadastrado.</div>
                        @endif
                    @endisset
                </div>
            </div>
            <a href="#">Contato</a>
        </nav>

        <!-- Login -->
        <div class="login">
            <span class="material-symbols-outlined">
                account_circle
            </span>
            <span>Conta</span>
        </div>

    </div>
</header>

<!-- Seção do Vídeo -->
<section class="hero">

    <video autoplay muted loop playsinline class="video-bg">
        <source src="{{ asset('video/Looping.mp4') }}" type="video/mp4">
    </video>

    <div class="overlay"></div>
    <div class="centralizador">
        <div class="hero-content">
            <h2 class="yellow-slogan"><img src="{{ asset('video/Rectangle.png') }}" type="img" class="reta">Sonhando acordado,</h2>
            <h2 class="white-slogan">Não deixe o mar <br>te ENGOLIR.</h2>

            <div class="scroll-down">
                <p>scroll down</p>
                <span class="material-symbols-outlined">
                    expand_more
                </span>
            </div>
        </div>
    </div>
    

    

</div>
</section>

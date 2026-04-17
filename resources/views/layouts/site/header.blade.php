<header class="header">
    <div class="container">

        <!-- Logo -->
        <div class="logo">
            <img src="{{ asset('video/Group.png') }}" class="VixS1">
        </div>

        <div class="none">
            Vitoria - ES
        </div>

        <!-- Menu Central -->
        <nav class="menu">
            <a href="#"><img src="{{ asset('video/logo.png') }}" class="reta"></a>
        </nav>

        <!-- CONTATO -->
        <div class="login" onclick="openPage('https://wa.me/5555279952930?text=Ol%C3%A1%2C%20somos%20a%20Vix%20Shipping.')">
            <span>Contato</span>
        </div>

    </div>
</header>

<img src="{{ asset('video/back.png') }}" class="logogrande">

<!-- HERO -->
<section class="hero">

    <video autoplay muted loop playsinline class="video-bg">
        <source src="{{ asset('video/Looping.mp4') }}" type="video/mp4">
    </video>

    <div class="overlay"></div>

    <div class="centralizador">

        <div class="hero-content">

            <h2 class="yellow-slogan">
                NOSSA HISTÓRIA
            </h2>

            <div class="scroll-down">
                <p>Fundada em julho de 2017 por Virginia Pimentel Fardin, a <br>Vix Shipping surge como um agente de cargas 
                    capixaba <br>com mais de 20 anos de experiência no comércio exterior. <br> <br>O nome da empresa foi cuidadosamente 
                    escolhido para <br>homenagear nossa querida cidade, Vitória - ES, refletindo <br>nosso compromisso com a região
                     e nossa missão de <br>oferecer serviços de alta qualidade.</p>
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
@extends('layouts.site.site')

@section('titulo')
    Vix Shipping
@endsection

@section('conteudo')
    <div class="showcase-nav">
        @foreach ($showcases as $index => $showcase)
            <a href="#showcase-{{ $index }}" class="nav-item">
                {{ $showcase['title_showcase'] }}
            </a>
        @endforeach
    </div>
    <div class="boxmobilehistory">
        <div class="historymobiletitle">Nossa História</div>
        <div class="historymobile">Fundada em julho de 2017 por Virgínia Pimentel Fardin, a Vix Shipping surge como um agente de cargas capixaba com mais de 20 anos de experiência no comércio exterior.<br><br> O nome da empresa foi cuidadosamente escolhido para homenagear nossa querida cidade, Vitória - ES, refletindo nosso compromisso com a região e nossa missão de oferecer serviços de alta qualidade.</div>
    </div>
        <section class="showcase-container">
        <div class="showcases">
            @isset($showcases)
                @if(count($showcases))
                    @foreach ($showcases as $index => $showcase)
                        <div class="card-showcase" id="showcase-{{ $index }}">
                            <div class="left-card">
                                <img src="{{ asset('storage/' . $showcase['logo_showcase']) }}" class="logo-showcase">
                                <div class="block-left">
                                    <h2 class="title-showcase">{{$showcase['title_showcase']}}</h2>
                                    <div class="text-showcase">{{$showcase['description_showcase']}}</div>
                                </div>
                            </div>
                            <div class="right-card">
                                <img src="{{ asset('storage/' . $showcase['image_showcase']) }}" class="image-showcase">
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="no-showcase">Sem nenhum serviço cadastrado.</div>
                @endif
            @endisset
        </div>
        <div class="representante">
            <div class="blue">NOSSAS REPRESENTANTES</div>
            <div class="secundario">conheça nosso time em campo</div>
            <div class="rep2">
                <div class="rep1">
                    <img src="{{ asset('video/Virginia.png') }}" class="fotoRep">
                    <div class="Nomerep">Virgínia Pimentel</div>
                    <div class="cargorep">Diretora Executiva</div>
                    <div class="tell">+55 27 99529-3024</div>
                </div>
                <div class="rep1">
                    <img src="{{ asset('video/Tatiana.png') }}" class="fotoRep">
                    <div class="Nomerep">Tatiana Novaes</div>
                    <div class="cargorep">Consultora Comercial</div>
                    <div class="tell">+55 27 99999-2060</div>
                </div>
            </div>
        </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3741.543247907152!2d-40.33205273890074!3d-20.31916453662541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb83da269955555%3A0xf423547ce499a217!2sVix%20Shipping!5e0!3m2!1spt-BR!2sbr!4v1776096637493!5m2!1spt-BR!2sbr" width="100%" class="mapa" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        
        <div class="bg-animation" data-us-project=""></div>
    </section>
@endsection
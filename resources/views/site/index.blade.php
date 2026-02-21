@extends('layouts.site.site')

@section('titulo')
    Kook Studio
@endsection

@section('conteudo')
    <section class="showcase-container">
        <div class="showcases">
            @isset($showcases)
                @if(count($showcases))
                    @foreach ($showcases as $showcase)
                        <div class="card-showcase">
                            <div class="left-card">
                                <img src="{{ asset('storage/' . $showcase['logo_showcase']) }}" class="logo-showcase">
                                <div class="block-left">
                                    <h2 class="title-showcase">{{$showcase['title_showcase']}}</h2>
                                    <div class="text-showcase">{{$showcase['description_showcase']}}</div>
                                    <div class="more">read more →</div>
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
    </section>
@endsection
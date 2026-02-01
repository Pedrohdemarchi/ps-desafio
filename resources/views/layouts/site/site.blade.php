<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('site/css/site.css')}}">
</head>
<body>
    @include('layouts.site.header')

    @yield('conteudo')

    @include('layouts.site.footer')

    <script src="{{asset('site/js/script.js')}}"></script>
</body>
</html>
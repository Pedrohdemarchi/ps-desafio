<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
</head>
<body>
    @include('layouts.site.header')

    @yield('conteudo')

    @include('layouts.site.footer')
</body>
</html>
<header class="header">
    <div class="container">

        <!-- Logo -->
        <div class="logo">
            <img src="{{ asset('video/Group1.png') }}" class="VixS1">
        </div>

        <!-- CONTATO -->
        <div >
            <span onclick="window.location.href='{{ route('Home') }}'">Home</span>
            <span onclick="window.location.href='{{ route('SobreNos') }}'">Sobre Nós</span>
            <span onclick="window.location.href='{{ route('Portifolio') }}'">Portifólio</span>
            <span onclick="window.location.href='{{ route('Contato') }}'">Contatos</span>
            <span class="login" onclick="window.open('https://api.whatsapp.com/send/?phone=5527998189472', '_blank')">Solicitar Orçamentos</span>
        </div>

    </div>
</header>



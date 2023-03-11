<header id="site-header">
    <div id="header-logo">
            <img src="{{asset("site/img/logo1.png")}}" alt="Logo 1">
    </div>
    <div class="nav">
        <h3 class="adm" onclick="openPage('http://127.0.0.1:8000')">Sou Administrador</h3>
        <a href="{{ route('siteIndex') }}">
            <h3>Home</h3>
        </a>

    </div>
    <div id="header-search">
        <form class="search"action="{{ route('productFind')}}">
            <input type="search" id="search" name="search">
            <button type="submit">
                <span class="material-symbols-outlined">search</span>
            </button>
        </form>
    </div>
</header>

<header id="site-header">
    <div id="header-logo">
        <a href="{{ route('siteIndex') }}">
            <img src="{{asset("site/img/logo1.png")}}" alt="Logo 1">
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

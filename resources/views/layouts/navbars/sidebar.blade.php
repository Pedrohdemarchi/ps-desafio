<div class="sidebar" data-color="adapti" data-background-color="white"
    data-image="{{ asset('material') }}/img/sidebar-1.jpg">

    <div class="logo">
        <span class="simple-text logo-normal">
            <img src="{{ asset('video/KOOK.png') }}" style="width: 70%;">
        </span>
    </div>

    <div class="sidebar-wrapper">
        <ul class="nav">

            <!-- Showcase -->
            <li class="nav-item{{ $activePage == 'showcase-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('showcase.index') }}">
                    <i class="material-icons">auto_awesome</i>
                    <p>{{ __('Showcase') }}</p>
                </a>
            </li>

            <!-- Relacionados ao admin -->
            @if (Auth::user()->access_level == 0)

            <li class="nav-item {{ $activePage == 'user-management' || $activePage == 'log-list' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#admin-collapse" aria-expanded="true">
                    <i class="material-icons">admin_panel_settings</i>
                    <p>{{ __('Admin') }}
                        <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse show" id="admin-collapse">

                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('user.index') }}">
                                <i class="sidebar-mini">
                                    <span class="material-icons">supervisor_account</span>
                                </i>
                                <span class="sidebar-normal">{{ __('Users') }}</span>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'log-list' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('log.index') }}">
                                <i class="sidebar-mini">
                                    <span class="material-icons">history</span>
                                </i>
                                <span class="sidebar-normal">{{ __('Logs') }}</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </li>

            @endif

        </ul>
    </div>
</div>
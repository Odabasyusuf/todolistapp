<div class="nav-header  text-center">
    <a href="{{ route('dashboard') }}" class="brand-logo">
{{--        <img class="logo-abbr" src="{{ asset('assets/panel') }}/images/logo.png" alt="">--}}
{{--        <img class="logo-compact" src="{{ asset('assets/panel') }}/images/logo-text.png" alt="">--}}
{{--        <img class="brand-title" src="{{ asset('assets/panel') }}/images/logo-text.png" alt="">--}}
        <h1> Todo List </h1>
    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>

<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        @yield('title')
                    </div>
                </div>
                <ul class="navbar-nav header-right">
                    <li class="nav-item">

                    </li>
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                            <img src="{{ \Illuminate\Support\Facades\Auth::user()->profile_photo_url }}" alt="user"
                                 class="rounded-circle" width="20">
                             <div class="header-info">
                                <span class="text-black">{{ \Illuminate\Support\Facades\Auth::user()->name }}</span>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
{{--                            <a href="{{ asset('assets/panel') }}/app-profile.html" class="dropdown-item ai-icon">--}}
{{--                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>--}}
{{--                                <span class="ml-2">Profil </span>--}}
{{--                            </a>--}}
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item ai-icon">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                    <span class="ml-2">Çıkış </span>
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

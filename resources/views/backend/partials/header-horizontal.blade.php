 @auth
 @php
 $currentUser = Auth::user()
 @endphp
 @endauth
 <header class="main-header">
    <div class="inside-header">
        <div class="d-flex align-items-center logo-box justify-content-start">
            <a href="{{ route('wali.dashboard') }}" class="logo">
                <div class="logo-lg">
                    @if ($global_option != '0')
                    @if ($global_option->logo_menu)
                    <span class="light-logo"><img src="{{ asset('') }}uploads/images/logo/{{ $global_option->logo_menu }}" alt="{{ config('app.name', 'App Web') }}" style="max-width: 50%"/></span>
                    <span class="dark-logo"><img src="{{ asset('') }}uploads/images/logo/{{ $global_option->logo_menu }}" alt="{{ config('app.name', 'App Web') }}" style="max-width: 50%"/></span>
                    @else
                    <span class="light-logo"><img src="{{ asset('') }}uploads/default/logobpic.png" alt="{{ config('app.name', 'App Web') }}" style="max-width: 70%"/></span>
                    <span class="dark-logo"><img src="{{ asset('') }}uploads/default/logobpic.png" alt="{{ config('app.name', 'App Web') }}" style="max-width: 70%"/></span>
                    @endif
                    @endif
                </div>
            </a>
        </div>
        <nav class="navbar navbar-static-top">
            <div class="app-menu">
                <ul class="header-megamenu nav">

                </ul>
            </div>

            <div class="navbar-custom-menu r-side">
                <ul class="nav navbar-nav">
                    <li class="btn-group nav-item d-lg-inline-flex d-none">
                        <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen" title="Full Screen">
                            <i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
                        </a>
                    </li>

                    <li class="dropdown user user-menu">
                        <a href="#" class="waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" title="User">
                            <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
                        </a>
                        <ul class="dropdown-menu animated flipInX">
                            <li class="user-body">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"> <i class="ti-lock text-muted me-2"></i>
                                {{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</header>
<nav class="main-nav" role="navigation">

    <input id="main-menu-state" type="checkbox" />
    <label class="main-menu-btn" for="main-menu-state">
        <span class="main-menu-btn-icon"></span>
    </label>

    <ul id="main-menu" class="sm sm-blue">
        <li>
            <a href="{{ route('wali.dashboard') }}"><i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>Dashboard</a>
        </li>
        <li>
            <a href="{{route('wali.keuangan')}}"><i span class="icon-Layout-grid"><span class="path1"></span><span class="path2"></span></i>Tagihan</a>
        </li>
        <li>
            <a href="{{route('wali.keranjang')}}"><i span class="icon-Layout-grid"><span class="path1"></span><span class="path2"></span></i>Order Bayar</a>
        </li>
        <li>
            <a href="{{route('wali.pembayaran')}}"><i span class="icon-Layout-grid"><span class="path1"></span><span class="path2"></span></i>Pembayaran</a>
        </li>
        <li>
            <a href="{{route('wali.pesertadidik')}}"><i span class="icon-Layout-grid"><span class="path1"></span><span class="path2"></span></i>Pesertadidik</a>
        </li>

    </ul>
</nav>

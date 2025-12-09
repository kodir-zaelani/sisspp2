<nav class="navbar navbar-expand-md bg-dark sticky-top border-bottom d-none d-md-block d-lg-block d-xl-block" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            @if ($global_option != '0')
            @if ($global_option->webname)
            {{$global_option->webname}}
            @else
            Maroko Kreatif
            @endif
            @endif
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="mb-2 navbar-nav me-auto mb-md-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="{{route('root')}}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="{{asset('')}}uploads/files/doc/panduan.pdf" target="_blank">Dokumentasi</a>
                </li>

                @guest
                @if (Route::has('login'))
                <li class="nav-item d-lg-none d-md-none d-xl-none d-block"><a class="nav-link" href="{{ route('login') }}">Masuk</a></li>

                @endif
                @else

                @auth
                @php
                $currentUser = Auth::user()
                @endphp
                @endauth

                <li class="nav-item dropdown d-lg-none d-md-none d-xl-none d-block">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $currentUser->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('backend.dashboard')}}">Dashboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out me-2" aria-hidden="true"></i>{{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest
            </ul>

            @guest
            @if (Route::has('login'))
            <a class="btn btn-outline-primary d-none d-md-block d-lg-block d-xl-block" href="{{ route('login') }}">{{ __('Masuk') }}</a>
            @endif
            @else
            @auth
            @php
            $currentUser = Auth::user()
            @endphp
            @endauth
            <div class="dropdown ms-3 d-xl-block d-lg-block d-md-block d-none" >
                <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ ($currentUser->imageThumbUrl) ? $currentUser->imageThumbUrl : '/assets/images/avatar/avatar-4.png' }}" alt="mdo" width="32" height="32" class="rounded-circle">
                    <span class="mx-2">
                        {{ $currentUser->name }}
                    </span>
                </a>
                <ul class="mt-3 dropdown-menu text-small dropdown-menu-lg-end">
                    <li>
                        @if ($currentUser->type_user == null)
                        <a class="dropdown-item" href="{{ route('backend.dashboard')}}" target="_blank">Dashboard</a>
                        @elseif ($currentUser->type_user == 'wali')
                        <a class="dropdown-item" href="{{ route('wali.dashboard')}}" target="_blank">Dashboard</a>
                        @endif
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out me-2" aria-hidden="true"></i>{{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
            @endguest
        </div>
    </div>
</nav>
<nav class="text-white navbar navbar-expand navbar-dark bg-dark fixed-bottom d-block d-md-none d-lg-none d-xl-none" data-bs-theme="dark">
    <ul class="navbar-nav nav-justified w-100">
        <li class="nav-item">
            <a href="{{ route('root')}}" class="nav-link active" title="Beranda" >
                <span class="d-flex flex-column">
                    <i class="bi bi-house "></i>
                    <small>Beranda</small>
                </span>

            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <span class="d-flex flex-column">
                    <i class="bi bi-search"></i>
                    <small>Cari</small>
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <span class="d-flex flex-column">
                    <i class="bi bi-cash-stack"></i>
                    <small>Pembayaran</small>
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <span class="d-flex flex-column">
                    <i class="bi bi-bell-fill"></i>
                    <small>Notif</small>
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <span class="d-flex flex-column">
                    <i class="bi bi-person-circle"></i>
                    <small>Profile</small>
                </span>
            </a>
        </li>
    </ul>

</nav>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @if (Request::segment(1) == '')
    <meta property="og:type" content="article"/>
    @if ($global_option != '0')
    @if ($global_option->logo)
    <meta property="og:image" content="{{ $global_option->imageThumbUrl }}" />
    @endif
    @if ($global_option->webname)
    <meta property="og:title" content="{{ $global_option->webname }}"/>
    @else
    <meta name="og:title"
    content="Sekolah Nusantara">
    @endif
    @if ($global_option->meta_description)
    <meta name="description" content="{{ $global_option->meta_description }}">
    @else
    <meta name="description"
    content="Digital Nusantara, Digital Nusantara Borneo, Borneo, Digital, Nusantara, Kaltim">
    @endif

    @if ($global_option->meta_keywords)
    <meta name="keywords" content="{{ $global_option->meta_keywords }}">
    @else
    <meta name="keywords"
    content="Digital Nusantara, Digital Nusantara Borneo, Borneo, Digital, Nusantara, Kaltim">
    @endif
    @if ($global_option->favicon)
    <link rel="icon" href="{{ asset('') }}uploads/images/logo/{{ $global_option->favicon }}" rel="icon">
    @else
    <link rel="icon" href="{{ asset('') }}uploads/images/logo/favicon.png" rel="icon">
    @endif
    @elseif ($global_option == '0')
    <meta name="description" content="Digital Nusantara, Digital Nusantara Borneo, Borneo, Digital, Nusantara, Kaltim">
    <meta name="keywords" content="Kodir Zaelani, digital nusantara, digtal ">
    <link rel="icon" href="{{ asset('') }}uploads/images/logo/favicon.png">
    @endif
    @elseif (Request::segment(1) == 'posts-detail')
    {{-- {{ Request::segment(1) }} --}}

    <meta property="og:title" content="{{ $global_option->webname }}"/>
    <meta name="description" content="{{$post->created_at}}" />
    <meta property="og:title" content="{{ $post->title }}" />
    <meta name="description" content="{{ $global_option->meta_description }}" />
    <meta property="og:url" content="{{ asset('') }}posts/detail/{{ $post->slug }}" />
    @if ($post->image)
    <meta property="og:image" content="{{ $post->imageUrl }}" />
    @else
    <meta property="og:image" content="{{ asset('assets/icons/ic-logo.png')}}" />
    @endif
    <meta property="og:type" content="article" />

    <title>{{ $post->title }}</title>
    @endif

    @if ($global_option != '0')

    @if ($global_option->meta_description)
    <meta name="description" content="{{ $global_option->meta_description }}">
    @else
    <meta name="description" content="Digital Nusantara, Digital Nusantara Borneo, Borneo, Digital, Nusantara, Kaltim">
    @endif

    @if ($global_option->meta_keywords)
    <meta name="keywords" content="{{ $global_option->meta_keywords }}">
    @else
    <meta name="keywords" content="Digital Nusantara, Digital Nusantara Borneo, Borneo, Digital, Nusantara, Kaltim">
    @endif
    @if ($global_option->favicon)
    <link rel="icon" href="{{ asset('') }}uploads/images/logo/{{ $global_option->favicon }}" rel="icon">
    @else
    <link rel="icon" href="{{ asset('') }}uploads/images/logo/favicon.png" rel="icon">
    @endif
    @elseif ($global_option == '0')
    <meta name="description" content="Digital Nusantara, Digital Nusantara Borneo, Borneo, Digital, Nusantara, Kaltim">
    <meta name="keywords" content="Kodir Zaelani, digital nusantara, digtal ">
    <link rel="icon" href="{{ asset('') }}uploads/images/logo/favicon.png">
    @endif
    <title>{{ $title ?? config('app.name', 'Teras Petani') }}</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-fixed/"/>
    <script src="{{ asset('') }}assets/frontend/js/color-modes.js"></script>
    <link href="{{ asset('') }}assets/icons/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/frontend/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}assets/icons/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <meta name="theme-color" content="#712cf9" />
        <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: #0000001a;
        border: solid rgba(0, 0, 0, 0.15);
        border-width: 1px 0;
        box-shadow:
          inset 0 0.5em 1.5em #0000001a,
          inset 0 0.125em 0.5em #00000026;
      }
      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }
      .bi {
        vertical-align: -0.125em;
        fill: currentColor;
      }
      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }
      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
      .bd-mode-toggle .bi {
        width: 1em;
        height: 1em;
      }
      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-dark sticky-top border-bottom" data-bs-theme="dark">
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
                        <a class="nav-link active" aria-current="page" href="{{route('root')}}">Home</a>
                    </li>
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item d-lg-none d-md-none d-xl-none d-block"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
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
                {{-- <form class="d-flex" role="search">
                    <input
                    class="form-control me-2"
                    type="search"
                    placeholder="Search"
                    aria-label="Search"
                    />
                    <button class="btn btn-outline-success" type="submit">
                        Search
                    </button>
                </form> --}}

                @guest
                @if (Route::has('login'))
                <a class="btn btn-outline-primary d-none d-md-block d-lg-block d-xl-block" href="{{ route('login') }}">{{ __('Login') }}</a>
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
                        <li><a class="dropdown-item" href="{{ route('backend.dashboard')}}" target="_blank">Dashboard</a></li>
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
    <main class="container">
        @yield('content')

    </main>
    <div class="container">
        <footer class="flex-wrap py-3 my-4 d-flex justify-content-between align-items-center border-top">
            <div class="col-md-6 d-flex align-items-center">
                {{-- <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1" aria-label="Bootstrap">
                    <svg class="bi" width="30" height="24" aria-hidden="true">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a> --}}
                <span class="mb-3 mb-md-0 text-body-secondary">
                    &copy;
                    @php
                    echo date('Y');
                    @endphp
                    | versi {{ config('app.version', '1.0') }} | Dibuat dengan <i class="bi bi-heart-fill"></i> untuk <i class="flag-icon flag-icon-id" title="Indonesia" id="id"></i>
                </span>
            </div>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex ">
                <li class="ms-3 d-none d-md-block d-lg-block d-xl-block">
                    <a class="text-body-secondary" href="#" aria-label="Instagram">
                        <svg class="bi" width="24" height="24" aria-hidden="true">
                            <use xlink:href="#instagram"></use>
                        </svg>
                    </a>
                </li>
                <li class="ms-3 d-none d-md-block d-lg-block d-xl-block">
                    <a class="text-body-secondary" href="#" aria-label="Facebook">
                        <svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook"></use>
                        </svg>
                    </a>
                </li>
            </ul>
        </footer>
    </div>
   {{-- Btn Theme --}}

  <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="bootstrap" viewBox="0 0 118 94">
      <title>Bootstrap</title>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
    </symbol>
    <symbol id="facebook" viewBox="0 0 16 16">
      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
    </symbol>
    <symbol id="instagram" viewBox="0 0 16 16">
      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
    </symbol>
  </svg>

    <script src="{{ asset('') }}assets/frontend/dist/js/bootstrap.bundle.min.js" class="astro-vvvwv3sm"></script>
</body>
</html>

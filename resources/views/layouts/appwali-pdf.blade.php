<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    @if ($global_option != '0')

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
    <link rel="icon" href="{{ asset('') }}uploads/images/logo/{{ $global_option->favicon }}">
    @else
    <link rel="icon" href="{{ asset('') }}uploads/images/logo/favicon.png">
    @endif
    @elseif ($global_option == '0')
    <meta name="description"
    content="Digital Nusantara, Digital Nusantara Borneo, Borneo, Digital, Nusantara, Kaltim">
    <meta name="keywords" content="Kodir Zaelani, digitan nusantara, digtal ">
    <link rel="icon" href="{{ asset('') }}uploads/images/logo/favicon.png">
    @endif

    <title>{{ $title ?? config('app.name', 'Teras Petani') }}</title>
    <link rel="stylesheet" href="{{ asset('') }}assets/wali/css/vendors_css.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/icons/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/wali/css/horizontal-menu.css">
	<link rel="stylesheet" href="{{ asset('') }}assets/wali/css/style.css">
	<link rel="stylesheet" href="{{ asset('') }}assets/wali/css/skin_color.css">
    @stack('styles')
</head>

<body class="fixed layout-top-nav light-skin theme-primary">

    <div class="wrapper">
        <div class="content-wrapper">
            <div class="container-fluid">
                @yield('content')
                {{ isset($slot) ? $slot : null }}
            </div>
        </div>
    </div>

    <script data-navigate-once src="{{ asset('') }}assets/wali/js/vendors.min.js"></script>
    @stack('scripts')
    <script data-navigate-once src="{{ asset('') }}assets/wali/js/template.js"></script>
    @stack('scripts-menu')

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/default-picture/icon-utama.webp') }}">
    @yield('linkImg')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script> --}}


    {{-- Title --}}
    <title>
        @if (Request::is('dashboard'))
            @if (!Auth::check())
                Dashboard
            @elseif (Auth::user()->role == 'admin')
                Dashboard - Admin
            @elseif (Auth::user()->role == 'guru')
                Dashboard - Guru
            @elseif (Auth::user()->role == 'murid')
                Dashboard - Murid
            @endif
        @elseif (Request::is('login'))
            Login
        @elseif (Request::is('register'))
            Register
        @elseif (Request::is('user-profile'))
            User Profile
        @elseif (Request::is('guru'))
            Guru
        @elseif(Request::is('siswa'))
            Siswa
        @elseif(Request::is('kelas'))
            Kelas
        @elseif(Request::is('ruang_kelas'))
            Ruangan Kelas
        @elseif(Request::is('jam_pelajaran'))
            Jam Pelajaran
        @endif
    </title>

    {{-- Fonts and icons --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    {{-- Nucleo Icons --}}
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />

    {{-- Font Awesome Icons --}}
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />

    {{-- CSS Files --}}
    <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.min.css') }}" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">

    @guest
        @if (Request::is('dashboard'))
            @yield('guest')
        @else
            @yield('content')
        @endif
    @else
        @if (Auth::user()->role == 'admin')
            @yield('admin')
        @elseif (Auth::user()->role == 'guru')
            @yield('guru')
        @elseif (Auth::user()->role == 'murid')
            @yield('murid')
        @endif
    @endguest

    <script src="{{ asset('assets/js/hanip.js') }}"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
    <script src="https://buttons.github.io/buttons.js" async defer></script>
    <script src="{{ asset('assets/js/soft-ui-dashboard.min.js') }}"></script>

</body>

</html>

@if (Auth::user()->role == 'guru')
    @extends('templates.layouts.app')
    @section('guru')
        @include('templates.layouts.navbars.guru.sidebar')
        <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
            <div class="container-fluid py-4">
                @yield('content')
            </div>
        </main>
    @endsection
@endif

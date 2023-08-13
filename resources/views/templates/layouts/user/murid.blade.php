@if (Auth::user()->role == 'murid')
    @extends('templates.layouts.app')
    @section('murid')
        @include('templates.layouts.navbars.murid.sidebar')
        <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
            <div class="container-fluid py-4">
                @yield('content')
            </div>
        </main>
    @endsection
@endif

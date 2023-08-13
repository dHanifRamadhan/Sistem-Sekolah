@if (Auth::user()->role == 'admin')
    @extends('templates.layouts.app')
    @section('admin')
        @include('templates.layouts.navbars.admin.sidebar')
        {{-- <a href="{{route('auth.logout')}}">logout</a> --}}
        <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
            <div class="container-fluid py-4">
                @include('templates.layouts.navbars.admin.navbar')
                @yield('content')
            </div>
        </main>
    @endsection
@endif

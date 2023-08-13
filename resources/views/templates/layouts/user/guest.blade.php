@extends('templates.layouts.app')
@section('linkImg')
    <link rel="preload" as="image" href="{{ asset('assets/img/default-picture/icon-utama.png') }}">
@endsection
@section('guest')
    @include('templates.layouts.navbars.guest.navbar')
    @yield('content.dashboard')
@endsection
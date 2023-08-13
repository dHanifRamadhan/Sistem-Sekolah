@extends('templates.layouts.app')
@section('content')
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <h3 class="font-weight-bolder text-info text-gradient">Selamat Datang!</h3>
                                    <p class="mb-0">Create account or Sign In<br></p>
                                    {{-- <p class="mb-0">buat akun atau reset kata sandi tunggu di acc admin</p> --}}
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST" action="{{route('auth.login')}}">
                                        @csrf
                                        <label>Email</label>
                                        <div class="mb-3">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Email" value="" aria-label="Email"
                                                aria-describedby="email-addon" autocomplete="off">
                                            @error('email')
                                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <label>Password</label>
                                        <div class="mb-3">
                                            <input type="password" class="form-control" name="password" id="password"
                                                placeholder="Password" value="" aria-label="Password"
                                                aria-describedby="password-addon">
                                            @error('password')
                                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="showPasswordToMe">
                                            <label class="form-check-label" for="rememberMe">Tunjukan kata sandi</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign
                                                in</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <small class="text-muted">
                                        Ingin kembali ke dashboard?
                                        <a href="{{route('dashboard')}}" class="text-info text-gradient font-weight-bold">
                                            kembali
                                        </a>
                                    </small>
                                    <br>
                                    <small class="text-muted">
                                        Lupa akun kamu? ganti password mu disini
                                        <a href="" class="text-info text-gradient font-weight-bold">
                                            disini
                                        </a>
                                    </small>
                                    <p class="mb-4 text-sm mx-auto">
                                        Belum punya akun?
                                        <a href="{{ route('register') }}" class="text-info text-gradient font-weight-bold">Sign up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 top-0 right-0">
                            <div class="h-100 d-md-block d-none">
                                <div class="oblique-image bg-cover mx-auto h-100 d-flex justify-content-center align-items-center">
                                    <img src="{{asset('assets/img/default-picture/icon-utama.webp')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
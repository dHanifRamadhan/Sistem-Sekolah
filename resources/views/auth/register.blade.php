@extends('templates.layouts.app')
@section('title')
    Register
@endsection
@section('content')
    <section class="min-vh-100 mb-8 mt-4">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 mx-3 border-radius-lg"
            style="background-image: url('../assets/img/curved-images/curved14.jpg');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Selamat Datang!</h1>
                        <p class="text-lead text-white">Buatlah Akun dengan ketentuan yang berlaku</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4">
                            <h5 class="d-flex align-items-center justify-content-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-credit-card-2-front" viewBox="0 0 16 16">
                                    <path
                                        d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z" />
                                    <path
                                        d="M2 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                </svg>
                                <span class="text-black">
                                    Daftar Akun
                                </span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <form role="form text-left" method="POST" action="{{ route('auth.register') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama"
                                        id="name" aria-label="Name" aria-describedby="name" autocomplete="off"
                                        required>
                                </div>
                                @error('nama')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                                <div class="mb-3 input-group">
                                    <input type="tel" class="form-control" placeholder="Nisn" name="nisn"
                                        id="nisn" required autocomplete="off" oninput="validateNISN()" maxlength="10"
                                        minlength="10">
                                    <script type="text/javascript">
                                        function validateNISN() {
                                            let nisn = document.getElementById('nisn').value;
                                            nisn = nisn.replace(/\D/g, ''); // Menghapus karakter non-angka

                                            document.getElementById('nisn').value = nisn;
                                        }
                                    </script>
                                </div>
                                @error('nisn')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                                <div class="mb-3 input-group">
                                    <input type="text" class="form-control" placeholder="Email" name="email"
                                        id="email" aria-label="Email" aria-describedby="email-addon" required
                                        autocomplete="off">
                                    <span class="input-group-text">@utama.id</span>
                                </div>
                                @error('email')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="Password" name="password"
                                        id="password" aria-label="Password" aria-describedby="password-addon" required>
                                </div>
                                @error('password')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                                <div class="mb-3">
                                    <input type="tel" class="form-control" name="nomor_telepon"
                                        placeholder="Nomor Telepon" id="phone-input" autocomplete="off"
                                        oninput="formatPhoneNumber()" maxlength="15" required>
                                        <script type="text/javascript">
                                        function formatPhoneNumber() {
                                            let phoneNumber = document.getElementById('phone-input').value;
                                            phoneNumber = phoneNumber.replace(/\D/g, ''); // Menghapus karakter non-angka
                                            
                                            if (phoneNumber.length > 0) {
                                                phoneNumber = phoneNumber.match(/.{1,4}/g).join('-'); // Memisahkan setiap empat angka dengan tanda hubung
                                            }
                                            
                                            document.getElementById('phone-input').value = phoneNumber;
                                        }
                                        </script>
                                </div>
                                @error('nomor_telepon')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                                <div class="mb-3">
                                    <select name="jenis_kelamin" id="" class="form-select" required>
                                        <option selected>Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                @error('jenis_kelamin')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                                <div class="mb-3">
                                    <input type="date" class="form-control" name="tanggal_lahir" id="" required>
                                    @error('tanggal_lahir')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <div class="dropdown">
                                        <button
                                            class="shadow-none btn border border-1 border-secondary dropdown-toggle col-12"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Pilih Hobi
                                        </button>
                                        <ul class="dropdown-menu p-3">
                                            @foreach ($hobi as $data)
                                                <li>
                                                    <div class="form-check">
                                                        <input type="checkbox" name="hobi[]" class="form-check-input"
                                                            id="hobi{{ $data->id }}" value="{{ $data->id }}">
                                                        <label for="hobi{{ $data->id }}"
                                                            class="custom-control-label">{{ $data->nama }}</label>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @error('hobi')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <textarea name="alamat" placeholder="Alamat" class="form-control" id="" cols="30" rows="5"
                                        style="resize: none;" required></textarea>
                                    @error('alamat')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3 d-flex align-items-center justify-content-center">
                                        <img id="previewImg" class="img-preview img-fluid mb-3 col-sm-5">
                                    </div>
                                    <input type="file" name="img_profile" id="gambarInput"
                                        class="form-control @error('file')
                                        is-invalid @enderror"
                                        onchange="imagePreview()">
                                    @error('file')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                    <script type="text/javascript">
                                        const gambarInput = document.getElementById('gambarInput');
                                        const previewImg = document.getElementById('previewImg');

                                        gambarInput.addEventListener('change', function(event) {
                                            const file = event.target.files[0];

                                            if (file) {
                                                const reader = new FileReader();

                                                reader.onload = function(e) {
                                                    previewImg.setAttribute('src', e.target.result);
                                                    previewImg.style.display = 'block';
                                                }

                                                reader.readAsDataURL(file);
                                            }
                                        });
                                    </script>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                                </div>
                                <p class="text-sm mt-3 mb-0">Kamu sudah punya akun? <a href="{{ route('login') }}"
                                        class="text-dark font-weight-bolder">Sign in</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

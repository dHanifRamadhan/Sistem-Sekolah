@extends('templates.layouts.user.admin')
@section('content')
    <div class="card">
        <div class="table-responsive">
            <table class="table align-item-center mb-0">
                <thead>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                    {{-- Foto Ditaru Bareng Nama --}}
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nip</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nomor Telepon</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Lahir</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Kelamin</th>
                    {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th> --}}
                </thead>
            </table>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <form action="{{ route('guru.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor mr-3"
                                class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path
                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                            </svg>
                            Guru
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex gap-3 flex-column p-3 mr-6 ml-6 collapse">
                            <div class="form-group">
                                <span>Masukan Nama</span>
                                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama"
                                    style="width: 380px">
                            </div>
                            <div class="form-group">
                                <span>Masukan Email</span>
                                <input type="email" name="email" class="form-control" placeholder="Masukan Email">
                            </div>
                            <div class="form-group">
                                <span>Masukan Password</span>
                                <input type="password" name="email" class="form-control" placeholder="Masukan Password">
                                
                            </div>
                            <div class="form-group">
                                <span>Masukan Nomor Telepon</span>
                                <input type="tel" name="nomor_telepon" class="form-control"
                                    placeholder="Masukan Nomor Telepon">
                            </div>
                            <div class="form-group">
                                <span>Pilih Jenis Kelamin</span>
                                <select name="jenis_kelamin" id="" class="form-control">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <span>Masukan Tanggal Lahir</span>
                                <input type="date" name="tanggal_lahir" class="form-control">
                            </div>
                            <div class="form-group">
                                <span>Masukan Alamat</span>
                                <textarea name="alamat" class="form-control" id="" cols="30" rows="5" style="resize: none;"></textarea>
                            </div>
                            <div class="form-group">
                                <img src="" alt="" width="">
                                <input type="file" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@extends('partials.main')
@section('content')
    <div class="container-fluid py-4 px-5">
        <div class="row">

            <div class="row">
                <div class="col-12">
                    <div class="card border shadow-xs mb-4">
                        <div class="card-header border-bottom pb-0">
                            <div class="d-sm-flex align-items-center">
                                <div>
                                    <h6 class="font-weight-semibold text-lg mb-0">Tambah Pemasok</h6>
                                    <p class="text-sm">Penambahaan Kerjasama Pemasok</p>
                                </div>

                            </div>
                        </div>
                        <div class="card-body px-0 py-0">
                            <div class="table-responsive p-0">
                                <form class="mx-3 my-5" method="POST" action="{{route('pemasoks.store')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="nama-pemasok" class="form-control-label">Nama</label>
                                                <input type="text" class="form-control @error('nama_pemasok') is-invalid @enderror" name="nama_pemasok" value="{{ old('nama_pemasok') }}" placeholder="Masukkan Nama Pemasok">

                                                <!-- error message untuk title -->
                                                @error('nama_pemasok')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="form-control-label">Email</label>
                                                <input type="email" class="form-control @error('email_pemasok') is-invalid @enderror" name="email_pemasok" value="{{ old('email_pemasok') }}" placeholder="Masukkan Email">

                                                @error('email_pemasok')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>                
                                            <div class="form-group">
                                                <label for="no-telpon-pemasok" class="form-control-label">No Telpon</label>
                                                <input type="text" class="form-control @error('no_telp_pemasok') is-invalid @enderror" name="no_telp_pemasok" value="{{ old('no_telp_pemasok') }}" placeholder="Masukkan No Telpon">

                                                @error('no_telp_pemasok')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat-pemasok" class="form-control-label">Alamat</label>
                                                <textarea class="form-control @error('alamat_pemasok') is-invalid @enderror" name="alamat_pemasok" value="{{ old('alamat_pemasok') }}" placeholder="Masukkan Alamat" cols="20" rows="3"></textarea>
                                            </div>
                                            @error('alamat_pemasok')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            <div class="col-12 d-flex justify-content-evenly">
                                                <button type="submit" class="btn btn-dark me-2 center" type="button">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

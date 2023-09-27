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
                                    <h6 class="font-weight-semibold text-lg mb-0">Tambah Gudang</h6>
                                    <p class="text-sm">Penambahan Gudang Baru </p>
                                </div>

                            </div>
                        </div>
                        <div class="card-body px-0 py-0">
                            <div class="table-responsive p-0">
                                <form class="mx-3 my-5" method="POST" action="{{route('gudangs.store')}}">
                                    @csrf

                                    <div class="row">

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nama</label>
                                                    <input type="text" class="form-control @error('nama_gudang') is-invalid @enderror" name="nama_gudang" value="{{ old('nama_gudang') }}" placeholder="Masukkan Nama Gudang">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Kapasistas</label>
                                                    <input type="text" class="form-control @error('kapasitas') is-invalid @enderror" name="kapasitas" value="{{ old('kapasitas') }}" placeholder="Masukkan Kapasistas">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-tel-input" class="form-control-label">Alamat</label>
                                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan Alamat">

                                            </div>
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

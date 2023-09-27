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
                                    <h6 class="font-weight-semibold text-lg mb-0">Edit Gudang</h6>
                                    <p class="text-sm">Edit Data Gudang</p>
                                </div>

                            </div>
                        </div>
                        <div class="card-body px-0 py-0">
                            <div class="table-responsive p-0">
                                <form class="mx-3 my-5" method="POST" action="{{ route('gudangs.update', $gudang->id) }}">
                                    @csrf
                                    @method('PUT')
                                   <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nama</label>
                                                    <input type="text" class="form-control @error('nama_gudang') is-invalid @enderror" name="nama_gudang" value="{{ old('nama_gudang', $gudang->nama_gudang) }}" placeholder="Masukkan Nama Gudang">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Kapasistas</label>
                                                    <input type="text" class="form-control @error('kapasitas') is-invalid @enderror" name="kapasitas" value="{{ old('kapasitas', $gudang->kapasitas) }}" placeholder="Masukkan Kapasitas">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="example-tel-input" class="form-control-label">Alamat</label>
                                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat', $gudang->alamat) }}" placeholder="Masukkan Alamat">

                                            </div>
                                            <button type="submit" class="btn btn-dark me-2" type="button">Update</button>
                                            <button type="reset" class="btn btn-warning me-2">Reset</button>
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

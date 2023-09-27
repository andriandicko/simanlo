@extends('partials.main')
@section('title', 'Tambah Pesanan')
@section('content')
    <div class="container-fluid py-4 px-5">
        <div class="row">

            <div class="row">
                <div class="col-12">
                    <div class="card border shadow-xs mb-4">
                        <div class="card-header border-bottom pb-0">
                            <div class="d-sm-flex align-items-center">
                                <div>
                                    <h6 class="font-weight-semibold text-lg mb-0">Pesanan</h6>
                                    <p class="text-sm">Data Barang Pesanan</p>
                                </div>

                            </div>
                        </div>
                        <div class="card-body px-0 py-0">
                            <div class="table-responsive p-0">
                                <form class="mx-3 my-5" method="POST" action="{{route('pesanans.store')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                             <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Tanggal Pesanan</label>
                                                    <input type="date" class="form-control @error('tgl_pesanan') is-invalid @enderror" name="tgl_pesanan" value="{{ old('tgl_pesanan') }}" placeholder="Masukkan Tanggal Pesanan">
                                                    <!-- error message untuk title -->
                                                @error('tgl_pesanan')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Tanggal Pengiriman</label>
                                                    <input type="date" class="form-control @error('tgl_pengirim') is-invalid @enderror" name="tgl_pengirim" value="{{ old('tgl_pengirim') }}" placeholder="Masukkan Tanggal Pesanan">
                                                    <!-- error message untuk title -->
                                                @error('tgl_pengirim')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group" hidden>
                                                <label for="exampleFormControlSelect1">Nama Pelanggan</label>
                                                <input type="hidden" value="{{ Auth::user()->id }}" name="users_id">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Produk</label>
                                                <select class="form-control" id="produk" name="produk_id">
                                                    @foreach ($produks as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama_produk }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-12 d-flex justify-content-evenly">
                                                <button type="submit" class="btn btn-dark me-2">Pesan</button>
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

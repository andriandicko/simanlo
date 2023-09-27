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
                                    <h6 class="font-weight-semibold text-lg mb-0">Tambah Produk</h6>
                                    <p class="text-sm">Data Produk</p>
                                </div>

                            </div>
                        </div>
                        <div class="card-body px-0 py-0">
                            <div class="table-responsive p-0">
                                <form class="mx-3 my-5" method="POST" action="{{ route('produks.update', $produk->id) }}">
                                    @csrf
                                    {{ method_field('PUT') }}
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nama</label>
                                                    <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk" value="{{ old('nama_produk', $produk->nama_produk) }}" placeholder="Masukkan Nama Produk">
                                                    <!-- error message untuk title -->
                                                @error('nama_pemasok')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Harga</label>
                                                    <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga', $produk->harga) }}" placeholder="Masukkan Harga Produk">
                                                    <!-- error message untuk title -->
                                                @error('harga')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Berat</label>
                                                    <input type="text" class="form-control @error('berat') is-invalid @enderror" name="berat" value="{{ old('berat', $produk->berat) }}" placeholder="Masukkan Berat Produk">
                                                    <!-- error message untuk title -->
                                                @error('berat')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Satuan</label>
                                                    <input type="text" class="form-control @error('satuan') is-invalid @enderror" name="satuan" value="{{ old('satuan', $produk->satuan) }}" placeholder="Masukkan Satuan Produk">
                                                    <!-- error message untuk title -->
                                                @error('satuan')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Pemasok</label>
                                                <select class="form-control" name="pemasok_id" id="pemasok_id">
                                                    <option disabled value>Pilih Pemasok</option>
                                                    @foreach ($pemasok as $item)
                                                    <option value="{{$item->id}}" {{$item->id == $produk->pemasok->id ? "selected" : ''}}>{{$item->nama_pemasok}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Gudang</label>
                                                <select class="form-control" name="gudang_id" id="gudang_id">
                                                    <option disabled value>Pilih Gudang</option>
                                                    @foreach($gudang as $item)
                                                    <option value="{{$item->id}}" {{$item->id == $produk->gudang->id ? "selected" : ''}}>{{$item->nama_gudang}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Deskripsi</label>
                                                <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ old('deskripsi') }}" placeholder="Masukkan Deskripsi" cols="20" rows="6">{{ old('deskripsi', $produk->deskripsi) }}</textarea>
                                                 @error('deskripsi')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-center">
                                                <button type="submit" class="btn btn-dark me-2">Update</button>
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

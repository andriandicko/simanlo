@extends('partials.main')
@section('title', 'Produk')
@section('content')
    <div class="container-fluid py-4 px-5">
        <div class="row">

            <div class="row">
                <div class="col-12">
                    <div class="card border shadow-xs mb-4">
                        <div class="card-header border-bottom pb-0">
                            <div class="d-sm-flex align-items-center">
                                <div>
                                    <h6 class="font-weight-semibold text-lg mb-0">Produk</h6>
                                    <p class="text-sm">Data Produk</p>
                                </div>
                                <div class="ms-auto d-flex">
                                    @if (Auth::user()->role_id == 1)
                                        <button type="button" class="btn btn-sm btn-white me-2">
                                            View all
                                        </button>

                                        <a type="button" href="{{ route('produks.create') }}"
                                            class="btn btn-sm btn-dark btn-icon d-flex align-items-center me-2">
                                            <i data-feather="plus-circle" style="width: 18px;"></i>
                                            <span class="btn-inner--text ms-2">Produk</span>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 py-0">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                                Nama</th>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                                Harga</th>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                                Berat</th>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                                Satuan</th>
                                            @if (Auth::user()->role_id == 1)
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                                Pemasok</th>
                                            @endif
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                                Gudang</th>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                                Deskripsi</th>
                                            {{-- @if (Auth::user()->role_id == 1) --}}
                                                {{-- <th
                                                    class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                                    Aksi</th> --}}
                                                {{-- @else
                                                <th
                                                    class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                                    Pesan</th> --}}
                                            {{-- @endif --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($produks as $produk)
                                            <tr>
                                                <td class="align-middle text-center text-sm">
                                                    <p class="text-sm text-dark font-weight-semibold mb-0">
                                                        {{ $produk->nama_produk }}</p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <p class="text-sm text-dark font-weight-semibold mb-0">
                                                        {{ $produk->harga }}</p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <p class="text-sm text-dark font-weight-semibold mb-0">
                                                        {{ $produk->berat }} Kg</p>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <p class="text-sm text-dark font-weight-semibold mb-0">
                                                        {{ $produk->satuan }}</p>
                                                </td>
                                                @if (Auth::user()->role_id == 1)
                                                <td class="align-middle text-center">
                                                    <p class="text-sm text-dark font-weight-semibold mb-0">
                                                        {{ $produk->pemasok->nama_pemasok }}</p>
                                                </td>
                                                @endif
                                                <td class="align-middle text-center">
                                                    <p class="text-sm text-dark font-weight-semibold mb-0">
                                                        {{ $produk->gudang->nama_gudang }}</p>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <p class="text-sm text-dark font-weight-semibold mb-0">
                                                        {{ $produk->deskripsi }}</p>
                                                </td>

                                                @if (Auth::user()->role_id == 1)
                                                    <td class="align-middle text-center">
                                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                            action="{{ route('produks.destroy', $produk->id) }}"
                                                            method="POST">
                                                            <a href=""><i data-feather="eye"
                                                                    style="width: 18px;"></i></a>
                                                            <a href="{{ route('produks.edit', $produk->id) }}"><i
                                                                    data-feather="edit" style="width: 18px;"></i></a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                style="border: none; background-color: transparent; cursor: pointer;"><i
                                                                    data-feather="trash-2"
                                                                    style="width: 18px;"></i></button>
                                                        </form>
                                                    </td>
                                                    @else
                                                    <td class="align-middle text-center" hidden></td>
                                                @endif
                                            </tr>
                                        @empty
                                            <div class="alert alert-danger">
                                                Data Post belum Tersedia.
                                            </div>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="border-top py-3 px-3 d-flex align-items-center">
                                <p class="font-weight-semibold mb-0 text-dark text-sm">Page 1 of 10</p>
                                <div class="ms-auto">
                                    <button class="btn btn-sm btn-white mb-0">Previous</button>
                                    <button class="btn btn-sm btn-white mb-0">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection

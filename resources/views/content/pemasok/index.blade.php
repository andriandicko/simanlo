@extends('partials.main')
@section('title', 'Pemasok')
@section('content')
    <div class="container-fluid py-4 px-5">
        <div class="row">
            <div class="row">
                <div class="col-12">
                    <div class="card border shadow-xs mb-4">
                        <div class="card-header border-bottom pb-0">
                            <div class="d-sm-flex align-items-center">
                                <div>
                                    <h6 class="font-weight-semibold text-lg mb-0">Pemasok Barang</h6>
                                    <p class="text-sm">Data Perusahaan Pemasok Barang</p>
                                </div>
                                <div class="ms-auto d-flex">
                                    <button type="button" class="btn btn-sm btn-white me-2">
                                        View all
                                    </button>
                                    <a type="button" href="{{ route('pemasoks.create') }}"
                                        class="btn btn-sm btn-dark btn-icon d-flex align-items-center me-2">
                                        <i data-feather="plus-circle" style="width: 18px;"></i>
                                        <span class="btn-inner--text ms-2">Pemasok</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 py-0">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7">Nama
                                            </th>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                                No Telepon</th>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                                Email</th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Alamat
                                            </th>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @forelse ($pemasoks as $pemasok)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center ms-1">
                                                        <h6 class="mb-0 text-sm font-weight-semibold">{{$pemasok->nama_pemasok}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-sm text-dark font-weight-semibold mb-0">{{$pemasok->no_telp_pemasok}}</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-sm text-dark font-weight-semibold mb-0">{{$pemasok->email_pemasok}}</p>
                                            </td>
                                            <td>
                                                <p class="text-sm text-dark font-weight-semibold mb-0">{{$pemasok->alamat_pemasok}}</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pemasoks.destroy', $pemasok->id) }}" method="POST">
                                                    <a href="{{ route('pemasoks.edit', $pemasok->id) }}"><i data-feather="edit" style="width: 18px;"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" style="border: none; background-color: transparent; cursor: pointer;"><i data-feather="trash-2" style="width: 18px;"></i></button>
                                                </form>
                                            </td>
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
            <script>
                //message with toastr
                @if (session()->has('success'))
                    toastr.success('{{ session('success') }}', 'BERHASIL!');
                @elseif (session()->has('error'))
                    toastr.error('{{ session('error') }}', 'GAGAL!');
                @endif
            </script>
        @endsection

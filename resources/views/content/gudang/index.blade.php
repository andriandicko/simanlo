@extends('partials.main')
@section('title', 'Gudang')
@section('content')
    <div class="container-fluid py-4 px-5">
        <div class="row">

            <div class="row">
                <div class="col-12">
                    <div class="card border shadow-xs mb-4">
                        <div class="card-header border-bottom pb-0">
                            <div class="d-sm-flex align-items-center">
                                <div>
                                    <h6 class="font-weight-semibold text-lg mb-0">Data Gudang</h6>
                                    <p class="text-sm">Data Sebaran Gudang</p>
                                </div>
                                <div class="ms-auto d-flex">
                                    <button type="button" class="btn btn-sm btn-white me-2">
                                        View all
                                    </button>
                                    <a type="button" href="{{ route('gudangs.create') }}"
                                        class="btn btn-sm btn-dark btn-icon d-flex align-items-center me-2">
                                        <i data-feather="plus-circle" style="width: 18px;"></i>
                                        <span class="btn-inner--text ms-2">Gudang</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 py-0">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Nama
                                            </th>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                                Kapasitas</th>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7 ps-2">Alamat
                                            </th>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7 ps-2">Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($gudangs as $gudang)
                                        <tr>
                                            <td>
                                                <p class="text-center text-sm text-dark font-weight-semibold mb-0">{{$gudang->nama_gudang}}</p>
                                            </td>
                                            <td>
                                                <p class="text-center text-sm text-dark font-weight-semibold mb-0">{{$gudang->kapasitas}}</p>
                                            </td>
                                            <td class="text-center align-middle text-center text-sm">
                                                <p class="text-sm text-dark font-weight-semibold mb-0">{{$gudang->alamat}}</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('gudangs.destroy', $gudang->id) }}" method="POST">
                                                    <a href="{{ route('gudangs.edit', $gudang->id) }}"><i data-feather="edit" style="width: 18px;"></i></a>
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
        @endsection

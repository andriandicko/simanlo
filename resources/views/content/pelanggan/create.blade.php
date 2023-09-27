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
                                    <h6 class="font-weight-semibold text-lg mb-0">Tambah Pelanggan</h6>
                                    <p class="text-sm">Penambahan Agen Pelanggan </p>
                                </div>

                            </div>
                        </div>
                        <div class="card-body px-0 py-0">
                            <div class="table-responsive p-0">
                                {{-- <table class="table align-items-center mb-0">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7">Nama Barang
                                            </th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Deskripsi
                                            </th>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                                Harga Pack</th>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                                Pemasok</th>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                                Jumlah Tersedia</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                      

                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">

                                                    <div class="d-flex flex-column justify-content-center ms-1">
                                                        <h6 class="mb-0 text-sm font-weight-semibold">Indomie Soto</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm text-dark font-weight-semibold mb-0">Makanan Instan</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-sm text-dark font-weight-semibold mb-0">100.000</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-sm text-dark font-weight-semibold mb-0">PT. indofood Tbk.</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-sm text-dark font-weight-semibold mb-0">10</p>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#edited" class="text-secondary font-weight-bold text-xs mx-4"
                                                    data-bs-toggle="tooltip" data-bs-title="Edit">
                                                    <svg width="17" height="17" viewBox="0 0 15 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.2201 2.02495C10.8292 1.63482 10.196 1.63545 9.80585 2.02636C9.41572 2.41727 9.41635 3.05044 9.80726 3.44057L11.2201 2.02495ZM12.5572 6.18502C12.9481 6.57516 13.5813 6.57453 13.9714 6.18362C14.3615 5.79271 14.3609 5.15954 13.97 4.7694L12.5572 6.18502ZM11.6803 1.56839L12.3867 2.2762L12.3867 2.27619L11.6803 1.56839ZM14.4302 4.31284L15.1367 5.02065L15.1367 5.02064L14.4302 4.31284ZM3.72198 15V16C3.98686 16 4.24091 15.8949 4.42839 15.7078L3.72198 15ZM0.999756 15H-0.000244141C-0.000244141 15.5523 0.447471 16 0.999756 16L0.999756 15ZM0.999756 12.2279L0.293346 11.5201C0.105383 11.7077 -0.000244141 11.9624 -0.000244141 12.2279H0.999756ZM9.80726 3.44057L12.5572 6.18502L13.97 4.7694L11.2201 2.02495L9.80726 3.44057ZM12.3867 2.27619C12.7557 1.90794 13.3549 1.90794 13.7238 2.27619L15.1367 0.860593C13.9869 -0.286864 12.1236 -0.286864 10.9739 0.860593L12.3867 2.27619ZM13.7238 2.27619C14.0917 2.64337 14.0917 3.23787 13.7238 3.60504L15.1367 5.02064C16.2875 3.8721 16.2875 2.00913 15.1367 0.860593L13.7238 2.27619ZM13.7238 3.60504L3.01557 14.2922L4.42839 15.7078L15.1367 5.02065L13.7238 3.60504ZM3.72198 14H0.999756V16H3.72198V14ZM1.99976 15V12.2279H-0.000244141V15H1.99976ZM1.70617 12.9357L12.3867 2.2762L10.9739 0.86059L0.293346 11.5201L1.70617 12.9357Z"
                                                            fill="#64748B" />
                                                    </svg>
                                                </a>

                                                <a href="#deleted" class="text-secondary font-weight-bold text-xs"
                                                    data-bs-toggle="tooltip" data-bs-title="Deleted">
                                                    <svg width="17" height="17" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                        <path
                                                            d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"
                                                            fill="#64748B" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table> --}}

                                <form class="mx-3 my-5" method="POST" action="/barang">
                                    @csrf

                                    <div class="row">

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nama
                                                    Pelanggan</label>
                                                <input class="form-control" type="text" value=" "
                                                    id="example-text-input">
                                            </div>

                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Alamat</label>
                                                {{-- <input class="form-control" type="text" value=" "
                                                    id="example-text-input"> --}}
                                                <textarea class="form-control" name="" id="" cols="20" rows="3"></textarea>
                                            </div>
                                            
                                        </div>

                                        {{-- <div class="col-1"></div> --}}

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="example-tel-input" class="form-control-label">Nomor Telepon</label>
                                                <input class="form-control" type="tel" value=" "
                                                    id="example-tel-input">
                                            </div>


                                            <button type="submit" class="btn btn-dark me-2" type="button">Submit</button>

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

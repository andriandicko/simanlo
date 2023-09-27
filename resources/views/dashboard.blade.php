@extends('partials.main')
@section('title', 'Dashboard')
@section('content')

    <div class="container-fluid py-4 px-5">
        <div class="row">

            <div class="position-relative overflow-hidden">
                <div class="swiper mySwiper mt-4 mb-2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div>
                                <div
                                    class="card card-background shadow-none border-radius-xl card-background-after-none align-items-start mb-0">
                                    <div class="full-background bg-cover"
                                        style="background-image: url('https://asset-2.tstatic.net/tribunnews/foto/bank/images/bisnis-logistik_20180227_090807.jpg')"></div>
                                    <div class="card-body text-start px-3 py-0 w-100">
                                        <div class="row mt-12">
                                            <div class="col-sm-3 mt-auto">
                                                <h4 class="text-dark font-weight-bolder">1</h4>
                                                <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">Name</p>
                                                <h5 class="text-dark font-weight-bolder">Secured</h5>
                                            </div>
                                            <div class="col-sm-3 ms-auto mt-auto">
                                                <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">Category</p>
                                                <h5 class="text-dark font-weight-bolder">Banking</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="card card-background shadow-none border-radius-xl card-background-after-none align-items-start mb-0">
                                <div class="full-background bg-cover"
                                    style="background-image: url('https://2.bp.blogspot.com/-WU8zIge-9io/VyNtPobC2bI/AAAAAAAAC6Y/aZn_zlOHed8BhXh6C_FWVWyzBA7DYNzcgCLcB/s1600/Logistik.jpg')"></div>
                                <div class="card-body text-start px-3 py-0 w-100">
                                    <div class="row mt-12">
                                        <div class="col-sm-3 mt-auto">
                                            <h4 class="text-dark font-weight-bolder">#2</h4>
                                            <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">Name</p>
                                            <h5 class="text-dark font-weight-bolder">Cyber</h5>
                                        </div>
                                        <div class="col-sm-3 ms-auto mt-auto">
                                            <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">Category</p>
                                            <h5 class="text-dark font-weight-bolder">Security</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="card card-background shadow-none border-radius-xl card-background-after-none align-items-start mb-0">
                                <div class="full-background bg-cover"
                                    style="background-image: url('https://assets.digination.id/crop/0x0:0x0/x/photo/2018/09/04/2500165962.jpg')"></div>
                                <div class="card-body text-start px-3 py-0 w-100">
                                    <div class="row mt-12">
                                        <div class="col-sm-3 mt-auto">
                                            <h4 class="text-dark font-weight-bolder">#3</h4>
                                            <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">Name</p>
                                            <h5 class="text-dark font-weight-bolder">Alpha</h5>
                                        </div>
                                        <div class="col-sm-3 ms-auto mt-auto">
                                            <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">Category</p>
                                            <h5 class="text-dark font-weight-bolder">Blockchain</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="card card-background shadow-none border-radius-xl card-background-after-none align-items-start mb-0">
                                <div class="full-background bg-cover"
                                    style="background-image: url('https://accesslogistik.com/wp-content/uploads/2022/07/peranan-logistik-1024x1024.jpg')"></div>
                                <div class="card-body text-start px-3 py-0 w-100">
                                    <div class="row mt-12">
                                        <div class="col-sm-3 mt-auto">
                                            <h4 class="text-dark font-weight-bolder">#4</h4>
                                            <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">Name</p>
                                            <h5 class="text-dark font-weight-bolder">Beta</h5>
                                        </div>
                                        <div class="col-sm-3 ms-auto mt-auto">
                                            <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">Category</p>
                                            <h5 class="text-dark font-weight-bolder">Web3</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0">
                <div class="card border shadow-xs mb-4">
                    <div class="card-body text-start p-3 w-100">
                        <div
                            class="icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3">
                            <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path d="M4.5 3.75a3 3 0 00-3 3v.75h21v-.75a3 3 0 00-3-3h-15z" />
                                <path fill-rule="evenodd"
                                    d="M22.5 9.75h-21v7.5a3 3 0 003 3h15a3 3 0 003-3v-7.5zm-18 3.75a.75.75 0 01.75-.75h6a.75.75 0 010 1.5h-6a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="w-100">
                                    <p class="text-sm text-secondary mb-1">Gudang</p>
                                    <h4 class="mb-2 font-weight-bold">{{ $gudang_count }}</h4>
                                    {{-- <div class="d-flex align-items-center">
                                        <span class="text-sm text-success font-weight-bolder">
                                            <i class="fa fa-chevron-up text-xs me-1"></i>10.5%
                                        </span>
                                        <span class="text-sm ms-1">from $89,740.00</span>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0">
                <div class="card border shadow-xs mb-4">
                    <div class="card-body text-start p-3 w-100">
                        <div
                            class="icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3">
                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.5 5.25a3 3 0 013-3h3a3 3 0 013 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0112 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 017.5 5.455V5.25zm7.5 0v.09a49.488 49.488 0 00-6 0v-.09a1.5 1.5 0 011.5-1.5h3a1.5 1.5 0 011.5 1.5zm-3 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                    clip-rule="evenodd" />
                                <path
                                    d="M3 18.4v-2.796a4.3 4.3 0 00.713.31A26.226 26.226 0 0012 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 01-6.477-.427C4.047 21.128 3 19.852 3 18.4z" />
                            </svg>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="w-100">
                                    <p class="text-sm text-secondary mb-1">Produk</p>
                                    <h4 class="mb-2 font-weight-bold">{{ $produk_count }}</h4>
                                    {{-- <div class="d-flex align-items-center">
                                        <span class="text-sm text-success font-weight-bolder">
                                            <i class="fa fa-chevron-up text-xs me-1"></i>55%
                                        </span>
                                        <span class="text-sm ms-1">from 243</span>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0">
                <div class="card border shadow-xs mb-4">
                    <div class="card-body text-start p-3 w-100">
                        <div
                            class="icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3">
                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M3 6a3 3 0 013-3h12a3 3 0 013 3v12a3 3 0 01-3 3H6a3 3 0 01-3-3V6zm4.5 7.5a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0v-2.25a.75.75 0 01.75-.75zm3.75-1.5a.75.75 0 00-1.5 0v4.5a.75.75 0 001.5 0V12zm2.25-3a.75.75 0 01.75.75v6.75a.75.75 0 01-1.5 0V9.75A.75.75 0 0113.5 9zm3.75-1.5a.75.75 0 00-1.5 0v9a.75.75 0 001.5 0v-9z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="w-100">
                                    <p class="text-sm text-secondary mb-1">Users</p>
                                    <h4 class="mb-2 font-weight-bold">{{ $users_count }}</h4>
                                    {{-- <div class="d-flex align-items-center">
                                        <span class="text-sm text-success font-weight-bolder">
                                            <i class="fa fa-chevron-up text-xs me-1"></i>22%
                                        </span>
                                        <span class="text-sm ms-1">from $369.30</span>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card border shadow-xs mb-4">
                    <div class="card-body text-start p-3 w-100">
                        <div
                            class="icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3">
                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.25 2.25a3 3 0 00-3 3v4.318a3 3 0 00.879 2.121l9.58 9.581c.92.92 2.39 1.186 3.548.428a18.849 18.849 0 005.441-5.44c.758-1.16.492-2.629-.428-3.548l-9.58-9.581a3 3 0 00-2.122-.879H5.25zM6.375 7.5a1.125 1.125 0 100-2.25 1.125 1.125 0 000 2.25z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="w-100">
                                    <p class="text-sm text-secondary mb-1">Pesanan</p>
                                    <h4 class="mb-2 font-weight-bold">{{ $pesanan_count }}</h4>
                                    {{-- <div class="d-flex align-items-center"> --}}
                                        {{-- <span class="text-sm text-success font-weight-bolder"> --}}
                                            {{-- <i class="fa fa-chevron-up text-xs me-1"></i>18% --}}
                                        {{-- </span> --}}
                                        {{-- <span class="text-sm ms-1">from $19,800.40</span> --}}
                                    {{-- </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-xs text-muted text-lg-start">
                            Copyright
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            Corporate UI by
                            <a href="https://www.creative-tim.com" class="text-secondary" target="_blank">Creative
                                Tim</a>.
                        </div>
                    </div>
                    {{-- <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-xs text-muted"
                                    target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-xs text-muted"
                                    target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/blog" class="nav-link text-xs text-muted"
                                    target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link text-xs pe-0 text-muted"
                                    target="_blank">License</a>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </footer>
    </div>



@endsection

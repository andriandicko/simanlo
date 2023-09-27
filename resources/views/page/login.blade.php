@extends('page.main')
@section('title', 'Login')
@section('content')
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 d-flex flex-column mx-auto">
                        <div class="card card-plain mt-8">
                            <div class="card-header pb-0 text-left bg-transparent">

                                <div class=" d-flex mx-auto">
                                    @if (session('status'))
                                        <div class="alert alert-danger text-center" style="width: 450px;">
                                            {{ session('message') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="text-center">
                                    <h3 class="font-weight-black text-dark display-6">Welcome</h3>
                                    <p class="mb-0">
                                        <em>
                                            Silahkan Masukan Akun Mu.
                                        </em>
                                    </p>
                                </div>
                            </div>
                            <div class="card-body">
                                <form role="form" action="" method="POST">
                                    @csrf

                                    <label>Username</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Enter your name"
                                            name="username" id="username" aria-label="Name" aria-describedby="name-addon">
                                    </div>

                                    <label>Password</label>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" placeholder="Enter password"
                                            name="password" id="password" aria-label="Password"
                                            aria-describedby="password-addon">
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-dark w-100 mt-4 mb-3">Sign in</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-xs mx-auto">
                                    Don't have an account?
                                    <a href="/signup" class="text-dark font-weight-bold">Sign up</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-absolute w-40 top-0 end-0 h-100 d-md-block d-none">
                            <div class="oblique-image position-absolute fixed-top ms-auto h-100 z-index-0 bg-cover ms-n8"
                                style="background-image:url('../assets/img/image-sign-in.jpg')">
                                <div
                                    class="blur mt-12 p-4 text-center border border-white border-radius-md position-absolute fixed-bottom m-4">
                                    <h2 class="mt-3 text-dark font-weight-bold">Sistem Manajemen Logistik Lokal</h2>
                                    <h6 class="text-dark text-sm mt-5">Copyright © 2023 Simanlo System By JarvisProyek.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

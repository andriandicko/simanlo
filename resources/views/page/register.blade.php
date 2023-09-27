@extends('page.main')
@section('title', 'Register')
@section('content')
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="position-absolute w-40 top-0 start-0 h-100 d-md-block d-none">
                            <div class="oblique-image position-absolute d-flex fixed-top ms-auto h-100 z-index-0 bg-cover me-n8"
                                style="background-image:url('../assets/img/image-sign-up.jpg')">
                                <div class="my-9 text-start max-width-350 ms-7">
                                    <h1 class="mt-3 text-white font-weight-bolder">WELCOME TO<br> SIMANLO!!</h1>
                                    <p class="text-white text-lg mt-4 mb-4">Sistem Manajemen Logistik Local <br> web
                                        pencatatan logistik yang lebih efisien.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-group d-flex">
                                            <a href="javascript:;" class="avatar avatar-sm rounded-circle"
                                                data-bs-toggle="tooltip" data-original-title="Jessica Rowland">
                                                <img alt="Image placeholder" src="../assets/img/team-3.jpg" class="">
                                            </a>
                                            <a href="javascript:;" class="avatar avatar-sm rounded-circle"
                                                data-bs-toggle="tooltip" data-original-title="Audrey Love">
                                                <img alt="Image placeholder" src="../assets/img/team-4.jpg"
                                                    class="rounded-circle">
                                            </a>
                                            <a href="javascript:;" class="avatar avatar-sm rounded-circle"
                                                data-bs-toggle="tooltip" data-original-title="Michael Lewis">
                                                <img alt="Image placeholder" src="../assets/img/marie.jpg"
                                                    class="rounded-circle">
                                            </a>
                                            <a href="javascript:;" class="avatar avatar-sm rounded-circle"
                                                data-bs-toggle="tooltip" data-original-title="Audrey Love">
                                                <img alt="Image placeholder" src="../assets/img/team-1.jpg"
                                                    class="rounded-circle">
                                            </a>
                                        </div>
                                        <p class="font-weight-bold text-white text-sm mb-0 ms-2">Join 2.5M+ users</p>
                                    </div>
                                </div>
                                <div class="text-start position-absolute fixed-bottom ms-7">
                                    <h6 class="text-white text-sm mb-5">Copyright © 2023 Simanlo System By JarvisProyek.
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex flex-column mx-auto">
                        <div class="card card-plain mt-8">
                            <div class="card-header pb-0 text-left text-center bg-transparent">
                                <h3 class="font-weight-black text-dark display-6">Sign up</h3>
                                <p class="mb-0">
                                    <em>
                                        Senang bertemu anda! Silahkan daftarkan data dirimu.
                                    </em>
                                </p>
                            </div>

                            {{-- Alert Error Register --}}
                            @if ($errors->any())
                                <div class="alert alert-danger" style="width:450px;">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            {{-- Alert Status Register Success --}}
                            @if (session('status'))
                                <div class="alert alert-success text-center" style="width: 450px;">
                                    {{ session('message') }}
                                </div>
                            @endif


                            <div class="card-body">
                                <form role="form" action="" method="POST">
                                    @csrf
                                    <label>Username</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="username" id="username"
                                            placeholder="Enter your username" aria-label="Name"
                                            aria-describedby="name-addon">
                                    </div>

                                    <label>Fullname</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Enter your fullname" aria-label="Name"
                                            aria-describedby="name-addon">
                                    </div>


                                    <label>No Telp.</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="phone" id="phone"
                                            placeholder="Enter your number" aria-label="Name" aria-describedby="name-addon">
                                    </div>

                                    <label>Password</label>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" placeholder="Create a password"
                                            name="password" id="password" aria-label="Password"
                                            aria-describedby="password-addon">
                                    </div>

                                    <label>Address</label>
                                    <div class="mb-3">
                                        <textarea name="address" id="address" class="form-control" required></textarea>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-dark w-100 mt-4 mb-3">Sign up</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-xs mx-auto">
                                    Already have an account?
                                    <a href="/signin" class="text-dark font-weight-bold">Sign in</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

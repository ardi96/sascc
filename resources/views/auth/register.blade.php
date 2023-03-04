@extends('layouts.master-without-nav')

@section('title')
    @lang('translation.Register') 2
@endsection

@section('css')
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.css') }}">
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('body')

    <body class="auth-body-bg">
    @endsection

    @section('content')

        <div>
            <div class="container-fluid p-0">
                <div class="row g-0">

                    <div class="col-xl-8">
                        @component('components.login-page-left')
                        @endcomponent
                    </div>
                    <!-- end col -->

                    <div class="col-xl-4">
                        <div class="auth-full-page-content p-md-5 p-4">
                            <div class="w-100">

                                <div class="d-flex flex-column h-100">
                                    {{-- <div class="mb-4 mb-md-5"> --}}
                                        {{-- <a href="index" class="d-block auth-logo"> --}}
                                            {{-- <img src="{{ URL::asset('/assets/images/scc-logo-long.png') }}" alt="" height="64" class="auth-logo-dark"> --}}
                                            {{-- <img src="{{ URL::asset('/assets/images/logo-light.png') }}" alt="" height="18" class="auth-logo-light"> --}}
                                        {{-- </a> --}}
                                    {{-- </div> --}}
                                    <div class="my-auto">
                                        <div>
                                            <h5 class="text-primary">Register Account</h5>
                                            <p class="text-muted">Get your Salary Advance with SCC now.</p>
                                        </div>

                                        <div class="mt-4">
                                            <form method="POST" class="form-horizontal" action="{{ route('register') }}" enctype="multipart/form-data">
                                                @csrf


                                                <div class="mb-3 row">
                                                    <label for="username" class="col-md-4 col-form-label">User ID</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="useremail"
                                                        value="{{ old('username') }}" name="username" placeholder="Choose your User ID" autofocus required>

                                                        @error('username')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="useremail" class="col-md-4 col-form-label">Email</label>
                                                    <div class="col-md-8">
                                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="useremail"
                                                        value="{{ old('email') }}" name="email" placeholder="Enter email" autofocus required>

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                {{-- <div class="mb-3 row">
                                                    <label for="nric" class="col-form-label col-md-4">NRIC</label>

                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control @error('nric') is-invalid @enderror" id="nric"
                                                        value="{{ old('nric') }}" name="nric" placeholder="Enter NRIC" autofocus required>


                                                        @error('nric')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div> --}}

                                                <div class="mb-3 row">
                                                    <label for="mobileno" class="col-md-4 col-form-label">Mobile No</label>

                                                    <div class="col-md-8">
                                                        <input type="tel" class="form-control @error('mobileno') is-invalid @enderror"
                                                        value="{{ old('mobileno') }}" id="mobileno" name="mobileno" autofocus required
                                                            placeholder="Mobile number in the format 012345678">


                                                        @error('mobileno')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="username" class="col-form-label col-md-4">Full Name</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                        value="{{ old('name') }}" id="username" name="name" autofocus required
                                                            placeholder="Enter Full Name">


                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="userpassword" class="col-form-label col-md-4">Password</label>
                                                    <div class="col-md-8">
                                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="userpassword" name="password"
                                                            placeholder="Enter password" autofocus required>

                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="confirmpassword" class="col-form-label col-md-4">Confirm Pwd.</label>
                                                    <div class="col-md-8">
                                                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="confirmpassword"
                                                        name="password_confirmation" placeholder="Enter Confirm password" autofocus required>

                                                        @error('password_confirmation')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                {{-- <div class="mb-3 row">
                                                    <label for="userdob" class="col-form-label col-md-4">Date of Birth</label>

                                                    <div class="col-md-8">
                                                        <div class="input-group" id="datepicker1">
                                                                <input type="text" class="form-control @error('dob') is-invalid @enderror" placeholder="dd-mm-yyyy"
                                                                    data-date-format="dd-mm-yyyy" data-date-container='#datepicker1' data-date-end-date="0d" value="{{ old('dob') }}"
                                                                    data-provide="datepicker" name="dob" autofocus required>


                                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                            @error('dob')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div> --}}

                                                <div class="mb-3 row">
                                                    <label for="avatar" class="col-form-label col-md-4">Profile Picture</label>
                                                    <div class="col-md-8">
                                                        <div class="input-group">
                                                            <input type="file" class="form-control @error('avatar') is-invalid @enderror" id="inputGroupFile02" name="avatar" autofocus>
                                                            {{-- <label class="input-group-text" for="inputGroupFile02">Upload</label> --}}
                                                        </div>

                                                        @error('avatar')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="mt-4 d-grid">
                                                    <button class="btn btn-primary waves-effect waves-light"
                                                        type="submit">Register</button>
                                                </div>

                                                {{-- <div class="mt-4 text-center">
                                                    <h5 class="font-size-14 mb-3">Sign up using</h5>

                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <a href="#"
                                                                class="social-list-item bg-primary text-white border-primary">
                                                                <i class="mdi mdi-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"
                                                                class="social-list-item bg-info text-white border-info">
                                                                <i class="mdi mdi-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"
                                                                class="social-list-item bg-danger text-white border-danger">
                                                                <i class="mdi mdi-google"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div> --}}

                                                <div class="mt-4 text-center">
                                                    <p class="mb-0">By registering you agree to the SCC <a href="#"
                                                            class="text-primary">Terms of Use</a></p>
                                                </div>
                                            </form>

                                            <div class="mt-3 text-center">
                                                <p>Already have an account ? <a href="{{ url('login') }}"
                                                        class="fw-medium text-primary"> Login</a> </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="mt-4 mt-md-3 text-center">
                                        <p class="mb-0">© <script>
                                                document.write(new Date().getFullYear())

                                            </script> Sabah Credit Corporation. Crafted with <i class="mdi mdi-heart text-danger"></i> by
                                            SCC</p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>

    @endsection
    @section('script')
        <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
        <!-- owl.carousel js -->
        <script src="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.js') }}"></script>
        <!-- auth-2-carousel init -->
        <script src="{{ URL::asset('/assets/js/pages/auth-2-carousel.init.js') }}"></script>
    @endsection

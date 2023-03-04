@extends('layouts.master-layouts')

@section('title') @lang('translation.Profile') @endsection

@section('css')
<link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('body')
    <body data-topbar="light" data-layout="horizontal" style="width:80%; margin:0 auto;">
@endsection

{{-- data-layout-size="boxed" --}}

@section('content')

@component('components.breadcrumb')
@slot('li_1') Profile @endslot
@slot('title') Update Profile @endslot
@endcomponent

<div class="row">
    <div class="col-xl-12">
        @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            There was an error, please check your entries.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
        @endif
    {{-- <div class="justify-content-center"> --}}
        <div class="card">
            <div class="card-body">
                {{-- <form method="POST" class="form-horizontal" action="{{ route('users/$user->id') }}" enctype="multipart/form-data"> --}}
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" 
                        action="{{ route('updateProfile',$client)}}">
                        {{-- @method("PUT") --}}
                        @csrf
                        <input type="hidden" name="client_id" value ="{{ $client->id }}"">
                        <div class="row mb-3">
                            <label for="useremail" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="useremail" 
                                value="{{ Auth::user()->email }}" name="email" placeholder="Enter email" autofocus>
                                <div class="text-danger" id="emailError" data-ajax-feedback="email"></div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
    
                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="username" class="form-label">Username</label></div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('username') is-invalid @enderror" value="{{ Auth::user()->username }}" 
                                id="username" name="name" disabled>
                                <div class="text-danger" id="usernameError" data-ajax-feedback="username"></div>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="name" class="form-label">Full Name</label></div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('name') is-invalid 
                                @enderror" value="{{ old('name',$client->name) }}" id="name" name="name" autofocus placeholder="Enter Full Name">
                                <div class="text-danger" id="nameError" data-ajax-feedback="name"></div>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="userdob" class="col-sm-3 col-form-label">Date of Birth</label>
                            <div class="col-sm-9">
                                <div class="input-group" id="datepicker1">
                                    <input type="text" class="form-control @error('dob') is-invalid @enderror" placeholder="dd-mm-yyyy" 
                                    data-date-format="dd-mm-yyyy" data-date-container='#datepicker1' 
                                    data-date-end-date="0d" value="{{ date('d-m-Y', strtotime($client->dob)) }}" data-provide="datepicker" name="dob" autofocus id="dob">
                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                </div>
                                <div class="text-danger" id="dobError" data-ajax-feedback="dob"></div>
                                @error('dob')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="mobileno" class="form-label">Mobile Phone No. </label></div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('mobileno') is-invalid 
                                @enderror" value="{{ old('mobileno',$client->mobileno) }}" id="mobileno" name="mobileno" autofocus placeholder="Enter mobile phone number">
                                <div class="text-danger" id="mobileno" data-ajax-feedback="mobileno"></div>
                                @error('mobileno')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="nric" class="form-label">NRIC. </label></div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('nric') is-invalid 
                                @enderror" value="{{ old('nric',$client->nric) }}" id="nric" name="nric" autofocus placeholder="Enter NRIC">
                                <div class="text-danger" id="nric" data-ajax-feedback="nric"></div>
                                @error('nric')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="address_1" class="form-label">Address Line 1 </label></div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('address_1') is-invalid 
                                @enderror" value="{{ old('address_1',$client->address_1) }}" id="address_1" name="address_1" autofocus placeholder="Enter Address">
                                <div class="text-danger" id="address_1" data-ajax-feedback="address_1"></div>
                                @error('address_1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="address_2" class="form-label">Address Line 2 </label></div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('address_2') is-invalid 
                                @enderror" value="{{ old('address_2',$client->address_2) }}" id="address_2" name="address_2" autofocus placeholder="Enter Address">
                                <div class="text-danger" id="address_2" data-ajax-feedback="address_2"></div>
                                @error('address_2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="city" class="form-label">City </label></div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('city') is-invalid 
                                @enderror" value="{{ old('city',$client->city) }}" id="city" name="city" autofocus placeholder="Enter City">
                                <div class="text-danger" id="city" data-ajax-feedback="city"></div>
                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                      
                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="post_code" class="form-label">Post Code </label></div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('post_code') is-invalid 
                                @enderror" value="{{ old('post_code',$client->post_code) }}" id="post_code" name="post_code" autofocus placeholder="Enter Post Code">
                                <div class="text-danger" id="post_code" data-ajax-feedback="post_code"></div>
                                @error('post_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="state" class="form-label">State </label></div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('state') is-invalid 
                                @enderror" value="{{ old('state',$client->state) }}" id="state" name="state" autofocus placeholder="Enter State">
                                <div class="text-danger" id="state" data-ajax-feedback="state"></div>
                                @error('state')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
    
                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="work_location" class="form-label">Work Location </label></div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('work_location') is-invalid 
                                @enderror" value="{{ old('work_location',$client->work_location) }}" id="work_location" name="work_location" autofocus placeholder="Enter location of your office">
                                <div class="text-danger" id="work_location" data-ajax-feedback="work_location"></div>
                                @error('work_location')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                       
                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="salary" class="form-label">Salary/Month </label></div>
                            <div class="col-sm-9">
                                <input type="number" class="form-control @error('salary') is-invalid 
                                @enderror" value="{{ old('salary',$client->salary) }}" id="salary" name="salary" autofocus placeholder="Enter your last drawn salary">
                                <div class="text-danger" id="salary" data-ajax-feedback="salary"></div>
                                @error('salary')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="company_id" class="form-label">Employer </label></div>
                            <div class="col-sm-9">
                                <select name="company_id" class="form-select" id="company_id" required>
                                    <option value="-1">Other</option>
                                    @foreach($companies as $item)
                                        <option value="{{ $item->id }}" @if ( old('company_id',$item->id) == $client->company_id) selected @endif) >{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('company_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="row mb-3">
                            <label for="avatar" class="col-sm-3 col-form-label">Profile Picture</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="file" class="form-control @error('avatar') is-invalid @enderror" id="avatar" name="avatar" autofocus>
                                    <label class="input-group-text" for="avatar">Upload</label>
                                </div>
                                <div class="text-start mt-2">
                                    <img src="{{ asset(Auth::user()->avatar) }}" alt="" class="rounded-circle avatar-lg">
                                </div>
                                <div class="text-danger" role="alert" id="avatarError" data-ajax-feedback="avatar"></div>
                                @error('avatar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
     --}}
                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <button class="btn btn-primary w-md" type="submit">Update</button>
                                <a class="btn btn-secondary w-md" href="{{ route('index') }}">Cancel</a>
                            </div>
                        </div>
                    </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
</div>


@endsection

@section('script')
<!-- apexcharts -->
{{-- <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script> --}}

<!-- dashboard init -->
<script src="{{ URL::asset('assets/js/pages/dashboard.init.js') }}"></script>

<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>

<!-- Required datatable js -->
{{-- <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script> --}}
<!-- Datatable init js -->
{{-- <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script> --}}

@endsection
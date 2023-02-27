@extends('layouts.master-layouts')

@section('title') @lang('translation.Advance_Create') @endsection

@section('css')
<link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('body')
    <body data-topbar="light" data-layout="horizontal" style="width:80%; margin:0 auto;">
@endsection

{{-- data-layout-size="boxed" --}}

@section('content')

@component('components.breadcrumb')
@slot('li_1') Advance @endslot
@slot('title') Request Salary Advance @endslot
@endcomponent

<div class="row">
    <div class="col-xl-12">
        @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            There was an error, please check your entries.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
        @endif

        <div class="card">
            <div class="card-body">
                <form class="form-horizontal" method="POST" enctype="multipart/form-data" 
                        action="{{ route('advances.store',$client)}}">
                        {{-- @method("PUT") --}}
                        @csrf
                        <input type="hidden" name="client_id" value ="{{ $client->id }}"">
                        

                       

                        <div class="row mb-3">
                            <label for="userdob" class="col-sm-3 col-form-label">When do you need it</label>
                            <div class="col-sm-9">
                                <div class="input-group" id="datepicker1">
                                    <input type="text" class="form-control @error('dob') is-invalid @enderror" placeholder="dd-mm-yyyy" 
                                    data-date-format="dd-mm-yyyy" data-date-container='#datepicker1' 
                                    data-date-end-date="0d" value="{{ date('d-m-Y', strtotime(now()) ) }}" data-provide="datepicker" name="dob" id="dob">
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
                            <label for="salary" class="col-sm-3 col-form-label">How much do you want </label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control @error('salary') is-invalid 
                                @enderror" value="{{ old('client_salary',$client->salary) }}" id="salary" name="salary" autofocus placeholder="Enter your last drawn salary">
                                <div class="text-danger" id="salary" data-ajax-feedback="salary"></div>
                                @error('salary')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="name" class="col-sm-3 col-form-label">Purpose of your advance</label>
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
    
                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <button class="btn btn-primary w-md" type="submit">Submit</button>
                                <a class="btn btn-secondary w-md" href="{{ route('advances.index') }}">Cancel</a>
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
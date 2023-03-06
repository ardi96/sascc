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
                            <label for="requested_date" class="col-sm-3 col-form-label">When do you need it</label>
                            <div class="col-sm-9">
                                <div class="input-group" id="datepicker1">
                                    <input type="date" class="form-control @error('requested_date') is-invalid @enderror" 
                                    {{-- placeholder="dd-mm-yyyy"  --}}
                                    {{-- data-date-format="dd-mm-yyyy" data-date-container='#datepicker1'  --}}
                                    {{-- data-date-end-date="30d"  --}}
                                    value="{{    old('requested_date', date('d-m-Y', strtotime(now())))    }}" 
                                    {{-- data-provide="datepicker"  --}}
                                    name="requested_date" id="requested_date">
                                    {{-- <span class="input-group-text"><i class="mdi mdi-calendar"></i></span> --}}
                                    @error('requested_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                {{-- <div class="text-danger" id="requested_date" data-ajax-feedback="requested_date"></div> --}}
                                
                            </div>
                        </div>
                        @error('requested_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            <strong>ERROR</strong>
                        </span>
                        @enderror
                        <div class="row mb-3">
                            <label for="salary" class="col-sm-3 col-form-label">How much do you want </label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control @error('advance_amount') is-invalid 
                                @enderror" value="{{ old('advance_amount',$advance->advance_amount) }}" id="advance_amount" 
                                name="advance_amount" autofocus placeholder="Enter your advance request amount">
                                <div class="text-danger" id="advance_amount" data-ajax-feedback="advance_amount"></div>
                                
                                @error('advance_amount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="duration" class="col-sm-3 col-form-label">Duration (in Months) </label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control @error('duration') is-invalid 
                                @enderror" value="{{ old('duration',$advance->duration) }}" id="duration" name="duration" 
                                    autofocus placeholder="Enter duration of advance (in months)">
                                <div class="text-danger" id="duration" data-ajax-feedback="duration"></div>
                                @error('duration')
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
@extends('layouts.master-layouts')

@section('title') @lang('translation.Dashboards') @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('body')
    <body data-topbar="light" data-layout="horizontal" style="width:80%; margin:0 auto;">
@endsection

@section('content')

@if ( session()->has('msg') )
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        {{ session()->get('msg') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        {{ session()->forget('msg') }}
    </div> 
@endif 

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Edit Your Company Details</h4>
                    <form method="POST" class="form-horizontal" 
                        action="{{ route('manager.companyUpdate') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="company_id" value ="{{ $company->id }}">

                        <div class="row mb-4">
                            <label for="horizontal-username-input" class="col-sm-3 col-form-label">Company Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-username-input" value="{{ $company->name }}"  name="name" required>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-contact-input" class="col-sm-3 col-form-label">Contat Person Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-contact-input" value="{{ $company->contact_person }}" name="contact_person">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Contact Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="horizontal-email-input" value="{{ $company->contact_email }}" name="contact_email" required>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-phone-input" class="col-sm-3 col-form-label">Contact Phone Number</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-phone-input" value="{{ $company->contact_phone_no }}" name="contact_phone_no">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-location-input" class="col-sm-3 col-form-label">Location</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-location-input" value="{{ $company->location }}" name="location">
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">
                                         Save  <span><i class="fa fa-save"></i></span></button>
                                    <a href="{{ route('manager.index') }}" class="btn btn-secondary w-md">Cancel</a>
                                </div>
                            </div>
                        </div>

                    </form>
            </div>
        </div>
    </div>
</div>


@endsection
@section('script')

<script>
function submit_form()
{
    let form = document.getElementById("frm_approve");
    if ( confirm('Are you sure you want to approve?'))
    {
        form.submit();
    }
}   
</script>

<!-- apexcharts -->
{{-- <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script> --}}

<!-- dashboard init -->
{{-- <script src="{{ URL::asset('assets/js/pages/dashboard.init.js') }}"></script> --}}

<!-- Required datatable js -->
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>


@endsection
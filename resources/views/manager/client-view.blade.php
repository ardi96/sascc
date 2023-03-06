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
            
                <div class="invoice-title d-flex justify-content-left">
                    <h2 class="font-size-18">Salary Advance Registration</h2>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <address>
                            <strong>Aplicant Name:</strong>
                            {{ $client->name }}<br>
                        </address>
                        <address>
                            <strong>NRIC:</strong>
                            {{ $client->nric }}<br>
                        </address>
                        <address>
                            <strong>Date of Birth:</strong>
                            {{ date('d-m-Y',strtotime($client->dob)) }}<br>
                        </address>
                        <address>
                            <strong>Email :</strong>
                            {{ $client->email }}<br>
                        </address>
                        <address>
                            <strong>Employer :</strong>
                            {{ $company->name }}<br>
                        </address>
                        <address class="mt-2 mt-sm-0">
                            <strong>Work Location:</strong>
                            {{ $client->work_location}}
                        </address>
                        <address class="mt-2 mt-sm-0">
                            <strong>Duitnow ID:</strong>
                            {{ $client->duitnow_id}}
                        </address>
                    </div>
                    {{-- <div class="col-sm-6 text-sm-end"> --}}
                    <div class="col-sm-6">
                        <address>
                            <strong>Bank Code: </strong>
                            {{ $client->bank_code }}<br>
                        </address>
                        <address>
                            <strong>Bank Acc. No.: </strong>
                            {{ $client->bank_acc_no }}<br>
                        </address>
                        <hr>
                        <address>
                            <strong>Address (1): </strong>
                            {{ $client->address_1 }}<br>
                        </address>
                        <address>
                            <strong>Address (2): </strong>
                            {{ $client->address_2 }}<br>
                        </address>
                        <address>
                            <strong>City: </strong>
                            {{ $client->city }}<br>
                        </address>
                        <address>
                            <strong>Post Code: </strong>
                            {{ $client->post_code }}<br>
                        </address>
                        <address>
                            <strong>State:</strong>
                            {{ $client->state }}<br>
                        </address>
                    </div>
                </div>
                <hr>
                <div class="d-print-none mt-4">
                    @if ( $client->status < '4000')
                        <div class="float-start">
                            <form action="{{ route('manager.clientApproval', ['client_id' => $client->id] )}}" 
                                id="frm_approve"
                                method="POST">
                                @csrf 
                                <a href="#" onclick="submit_form()" class="btn btn-primary waves-effect waves-light me-1"><i
                                    class="fa fa-check-circle"></i>  Approve...</a>
                            </form>
                        </div>
                    @endif 
                    <div class="float-end">
                        <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light me-1"><i
                                class="fa fa-print"></i>  Print</a>
                        <a href="{{ route('manager.index')}}" class="btn btn-secondary w-md waves-effect waves-light">Back</a>
                    </div>
                </div>
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
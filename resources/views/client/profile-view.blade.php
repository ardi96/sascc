@extends('layouts.master-layouts')

@section('title') @lang('translation.Profile_View') @endsection

@section('body')
    <body data-topbar="light" data-layout="horizontal" style="width:80%; margin:0 auto;">
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Profile @endslot
        @slot('title') Registration Slip @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                            <div class="d-flex justify-content-center">
                                <img src="{{ URL::asset('/assets/images/scc_logo2.png') }}" alt="logo" height="60" />
                            </div>
                    </div>

                    <hr>

                    <div class="invoice-title d-flex justify-content-center">
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
                   
                    <div class="row">
                        <div class="col-sm-6">
                            <p>
                                The information on this website is for general informational purposes only. 
                                [Business name] makes no representation or warranty, express or implied. Your use of the site is solely at your own risk. This sitee may contain links to third party content, which we do not warrant, endorse, or assume liability for
                            </p>
                        </div>
                        <div class="col-sm-6 border-bottom border-dark">
                            <strong>Please provide your company approval (signature and chop) here: </strong>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                    <div class="d-print-none mt-4">
                        <div class="float-end">
                            <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light me-1"><i
                                    class="fa fa-print"></i>  Print</a>
                            <a href="{{ route('index')}}" class="btn btn-secondary w-md waves-effect waves-light">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection

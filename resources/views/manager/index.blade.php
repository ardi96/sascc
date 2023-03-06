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
        <div class="row">
            <div class="col-md-4">
                <div class="card mini-stats-wid text-white bg-primary">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="fw-medium">Number of Subcriptions</p>
                                <h4 class="mb-0">
                                    {{ $client_count }}
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid text-white bg-secondary">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="fw-medium">Pending for your Approval</p>
                                <h4 class="mb-0">{{ $pending_count }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid text-white bg-info">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="fw-medium">Recently Approved</p>
                                <h4 class="mb-0">{{ $recent_count }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
               <div class="table-responsive">
                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Status</th>
                            <th scope="col">NRIC</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mobile No</th>
                            <th scope="col">Bank Code</th>
                            <th scope="col">Bank Acc. No.</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $client)
                            <tr>
                                <td>
                                    {{ $client->id }}
                                </td>
                                <td>
                                    {{ $client->status }}
                                </td>
                                <td>
                                    {{ $client->nric }}
                                </td>
                                <td>
                                    <a href="{{ route('manager.clientView',['client_id' => $client->id]) }}">
                                    {{ $client->name }}
                                    </a>
                                </td>
                                <td>
                                    {{ $client->mobileno }}
                                </td>
                                <td>
                                    {{ $client->bank_code }}
                                </td>
                                <td>
                                    {{ $client->bank_acc_no }}
                                </td>
        {{--
                                <td style="text-align:center">
                                    <ul class="list-inline font-size-20 contact-links mb-0">
                                        <li class="list-inline-item px-2">
                                            <a href="/users/{{ $item->id}}/edit" title="Edit"><i class="bx bx-edit-alt"></i></a>
                                        </li>
                                        <li class="list-inline-item px-2">
                                            <a href="/users/{{ $item->id}}" title="Show"><i class="bx bx-show-alt"></i></a>
                                        </li>
                                    </ul>
                                </td> --}}
        
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('script')
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
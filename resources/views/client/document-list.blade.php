@extends('layouts.master-layouts')

@section('title') @lang('translation.Documents') @endsection

@section('body')
    <body data-topbar="light" data-layout="horizontal" >
@endsection

{{-- data-layout-size="boxed" --}}

@section('content')

@component('components.breadcrumb')
@slot('li_1') Document @endslot
@slot('title') Document List @endslot
@endcomponent

<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                {{-- <div class="text-sm-end mt-2 mt-sm-0 mb-2">
                    <a href="companies/create" class="btn btn-success">
                        <i class="mdi mdi-account-plus me-1"></i> New Client </a>
                </div> --}}
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">Client ID</th>
                                <th scope="col">Client Name</th>
                                <th scope="col">Work Location</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">City</th>
                                <th scope="col">Post Code</th>
                                <th scope="col">Status</th>
                                <th scope="col" style="text-align: center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $item)
                                <tr>
                                    <td>
                                        {{ $item->id }}
                                    </td>

                                    <td>
                                        {{ $item->name }}
                                    </td>

                                    <td>
                                        {{ $item->work_location}}
                                    </td>

                                    <td>
                                        {{ $item->email}}
                                    </td>

                                    <td>
                                        {{ $item->mobileno}}
                                    </td>

                                    <td>
                                        {{ $item->city }}
                                    </td>

                                    <td>
                                        {{ $item->post_code }}
                                    </td>

                                    <td>
                                        {{ $item->status }}
                                    </td>

                                    <td style="text-align:center">
                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                            <li class="list-inline-item px-2">
                                                <a href="/companies/{{ $item->id}}/edit" title="Edit"><i class="bx bx-edit-alt"></i></a>
                                            </li>
                                            <li class="list-inline-item px-2">
                                                <a href="/companies/{{ $item->id}}" title="Show"><i class="bx bx-show-alt"></i></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-8">

    </div>
</div>

<!-- end row -->


@endsection
@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('assets/js/pages/dashboard.init.js') }}"></script>
@endsection
@extends('layouts.master')

@section('title') @lang('translation.Client_List') @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Clients @endslot
        @slot('title') Client List @endslot
    @endcomponent

    <div class="row">
        {{-- @if (Session::has('msg') )
        <div class="alert alert-primary alert-dismissible fade show overlay" role="alert">
           {{Session::get('msg')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif --}}
        <div class="col-lg-12">
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
    </div>
@endsection
@section('script')
    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
@endsection
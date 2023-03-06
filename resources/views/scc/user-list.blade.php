@extends('layouts.master')

@section('title') @lang('translation.User_List') @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Users @endslot
        @slot('title') Users List @endslot
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
                    <div class="text-sm-end mt-2 mt-sm-0 mb-2">
                        <a href="users/create" class="btn btn-success">
                            <i class="mdi mdi-account-plus me-1"></i> New User </a>
                    </div>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" style="width: 70px;">#</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mobile No</th>
                                    <th scope="col" style="text-align: center">Locked</th>
                                    <th scope="col" style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $item)
                                    <tr>
                                        <td>
                                            <div class="avatar-xs">
                                                <img class="rounded-circle avatar-xs" src="{{ URL::asset($item->avatar) }}"
                                                alt="">
                                            </div>
                                        </td>
                                        <td>
                                            {{ $item->username }}
                                        </td>

                                        <td>
                                             {{ $item->name }}
                                        </td>

                                        <td>
                                            @if ($item->role_id == 1 )
                                                SCC Officer
                                            @elseif ($item->role_id == 2)
                                                Company/Employer
                                            @elseif ($item->role_id == 3)
                                                Client
                                            @endif
                                        </td>

                                        <td>
                                            {{ $item->email }}
                                        </td>
                                        <td>
                                            {{ $item->mobileno }}
                                        </td>

                                        <td style="text-align:center">
                                            <input class="form-check-input" type="checkbox" id="formCheck2" @if ($item->locked) checked @endif @disabled(true)>
                                        </td>
                                        <td style="text-align:center">
                                            <ul class="list-inline font-size-20 contact-links mb-0">
                                                <li class="list-inline-item px-2">
                                                    <a href="/users/{{ $item->id}}/edit" title="Edit"><i class="bx bx-edit-alt"></i></a>
                                                </li>
                                                <li class="list-inline-item px-2">
                                                    <a href="/users/{{ $item->id}}" title="Show"><i class="bx bx-show-alt"></i></a>
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
@extends('layouts.master-layouts')

@section('title') @lang('translation.Documents') @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('body')
    <body data-topbar="light" data-layout="horizontal">
@endsection

{{-- data-layout-size="boxed" --}}

@section('content')

@component('components.breadcrumb')
@slot('li_1') Document @endslot
@slot('title') Document Upload @endslot
@endcomponent

<div class="row">
    <div class="col-xl-8">
    {{-- <div class="justify-content-center"> --}}
        <div class="card">
            <div class="card-body">
                {{-- <form method="POST" class="form-horizontal" action="{{ route('users/$user->id') }}" enctype="multipart/form-data"> --}}
                <form method="POST" class="form-horizontal" action="{{ url('/documents') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-4">
                        <label for="horizontal-filename-input" class="col-sm-3 col-form-label">File Name</label>

                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="file" class="form-control @error('filename') is-invalid @enderror" id="horizontal-filename-input" name="filename" autofocus required>
                                {{-- <label class="input-group-text" for="inputGroupFile02">Upload</label> --}}
                            </div>

                            @error('filename')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Document Type</label>
                        <div class="col-sm-9">
                            <select name="document_type" class="form-select" id="roleid" required>
                                @foreach($document_types as $item)
                                    <option value="{{ $item->id }}">{{ $item->document_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="horizontal-description-input" class="col-sm-3 col-form-label">File Description</label>

                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control" id="horizontal-description-input" name="description" autofocus>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-sm-9">
                            <div>
                                <button type="submit" class="btn btn-primary w-md">Uplad</button>
                                <a href="{{ route('index') }}" class="btn btn-primary w-md">Back</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
</div>

<!-- end row -->
<div class="row">
    <div class="col-xl-8">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">Document Type</th>
                                <th scope="col">Uploaded Date</th>
                                <th scope="col">Description</th>
                                <th scope="col">Status</th>
                                <th scope="col" style="text-align: center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($documents as $item)
                                <tr>
                                    <td>
                                        {{ $item->document_name }}
                                    </td>

                                    <td>
                                        {{ date("d/m/Y", strtotime($item->uploaded_date)) }}
                                    </td>

                                    <td>
                                        {{ $item->description }}
                                    </td>

                                    <td>
                                        {{ $item->status}}
                                    </td>

                                    <td style="text-align:center">
                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                            <li class="list-inline-item px-2">
                                                <a href="{{ $item->filename }}" target="_new" title="Show"><i class="bx bx-show-alt"></i></a>
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

@endsection
@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('assets/js/pages/dashboard.init.js') }}"></script>


<!-- Required datatable js -->
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>

@endsection
@extends('layouts.master')

@section('title') @lang('translation.Client_Import') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Clients @endslot
        @slot('title') Import Client @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    {{-- <form method="POST" class="form-horizontal" action="{{ route('users/$user->id') }}" enctype="multipart/form-data"> --}}
                    <form method="POST" class="form-horizontal" action="{{ url('clients-import') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-4">
                            <label for="horizontal-filename-input" class="col-sm-3 col-form-label">File Name</label>

                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="file" class="form-control @error('filename') is-invalid @enderror" id="horizontal-filename-input" name="filename" autofocus>
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
                                <select name="roleid" class="form-select" id="roleid" required>
                                    <option value="1">SCC Officer</option>
                                    <option value="2">Company/Employer</option>
                                </select>
                            </div>
                        </div>


                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" id="horizontalLayout-Check" name="locked" value="1">
                                    <label class="form-check-label" for="horizontalLayout-Check">
                                        Lock this user
                                    </label>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Save</button>
                                    <a href="{{ route('users.index') }}" class="btn btn-primary w-md">Cancel</a>
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
@endsection

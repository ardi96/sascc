@extends('layouts.master')

@section('title') @lang('translation.User_Edit') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Users @endslot
        @slot('title') Edit User @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">{{ $user->name }}</h4>

                    {{-- <form method="POST" class="form-horizontal" action="{{ route('users/$user->id') }}" enctype="multipart/form-data"> --}}
                    <form method="POST" class="form-horizontal" action="{{ url('users') }}/{{ $user->id }}" enctype="multipart/form-data">
                        @method("PUT")
                        @csrf
                        <div class="row mb-4">
                            <label for="horizontal-username-input" class="col-sm-3 col-form-label">User ID</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-username-input" value="{{ $user->username }}" disabled>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="horizontal-email-input" value="{{ $user->email }}" name="email">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-name-input" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-name-input" value="{{ $user->name }}" name="name">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Mobile Number</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-email-input" value="{{ $user->mobileno }}" name="mobileno">
                            </div>
                        </div>
                       
                        @if( $user->role_id == 2 ) 

                        <div class="row mb-4">
                            <label for="horizontal-company-input" class="col-sm-3 col-form-label">Company</label>
                            <div class="col-sm-9">
                                <select name="company_id" class="form-select" id="company_id" required>
                                    <option value="0">Other</option>
                                    @foreach($companies as $item)
                                        <option value="{{ $item->id }}" @if ( old('company_id',$item->id) == $user->company_id) selected @endif) >{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('company_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        @endif

                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" id="horizontalLayout-Check" name="locked" @if ( $user->locked ) checked @endif value="1">
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

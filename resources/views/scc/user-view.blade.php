@extends('layouts.master')

@section('title') @lang('translation.User_View') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Users @endslot
        @slot('title') View User @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">User Information</h4>
                    <div class="table-responsive">
                        <table class="table table-nowrap mb-0">
                            <tbody>
                                <tr>
                                    <th scope="row">User Name :</th>
                                    <td>{{ $user->username }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Full Name :</th>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                {{-- <tr>
                                    <th scope="row">Email :</th>
                                    <td>{{ date('d-m-Y', strtotime(Auth::user()->dob)) }}</td>
                                </tr> --}}
                                <tr>
                                    <th scope="row">E-mail :</th>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Mobile No :</th>
                                    <td>{{ $user->mobileno}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Role :</th>
                                    <td>
                                        <input type="checkbox" class="form-check-input" @if ( $user->roleid==1) checked @endif @disabled(true)>
                                        <label class="form-check-label"> SCC Admin</label><br>
                                        <input type="checkbox" class="form-check-input" @if ( $user->roleid==2) checked @endif @disabled(true)>
                                        <label class="form-check-label"> Company/Employer</label><br>
                                        <input type="checkbox" class="form-check-input" @if ( !isset($user->roleid)) checked @endif @disabled(true)>
                                        <label class="form-check-label"> Client/Employee</label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="{{ route('users.index')}}" class="btn btn-primary w-md mt-2">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.master')

@section('title') @lang('translation.Company_View') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Companies @endslot
        @slot('title') View Company @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Company Information</h4>
                    <div class="table-responsive">
                        <table class="table table-nowrap mb-0">
                            <tbody>
                                <tr>
                                    <th scope="row">Company Name :</th>
                                    <td>{{ $item->name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Contact Person Name :</th>
                                    <td>{{ $item->contact_person }}</td>
                                </tr>
                                {{-- <tr>
                                    <th scope="row">Email :</th>
                                    <td>{{ date('d-m-Y', strtotime(Auth::user()->dob)) }}</td>
                                </tr> --}}
                                <tr>
                                    <th scope="row">Contact E-mail :</th>
                                    <td>{{ $item->contact_email }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Contact Phone Number :</th>
                                    <td>{{ $item->contact_phone_no}}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Location :</th>
                                    <td>{{ $item->location}}</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                    <a href="{{ route('companies.index')}}" class="btn btn-primary w-md mt-2">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection

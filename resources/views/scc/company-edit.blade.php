@extends('layouts.master')

@section('title') @lang('translation.Company_Edit') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Companies @endslot
        @slot('title') Edit Company @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">{{ $company->name }}</h4>
                    <form method="POST" class="form-horizontal" action="{{ url('companies') }}/{{ $company->id }}" enctype="multipart/form-data">
                        @method("PUT")
                        @csrf
                        <div class="row mb-4">
                            <label for="horizontal-username-input" class="col-sm-3 col-form-label">Company Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-username-input" value="{{ $company->name }}"  name="name" required>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-contact-input" class="col-sm-3 col-form-label">Contat Person Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-contact-input" value="{{ $company->contact_person }}" name="contact_person">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Contact Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="horizontal-email-input" value="{{ $company->contact_email }}" name="contact_email" required>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-phone-input" class="col-sm-3 col-form-label">Contact Phone Number</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-phone-input" value="{{ $company->contact_phone_no }}" name="contact_phone_no">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-location-input" class="col-sm-3 col-form-label">Location</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-location-input" value="{{ $company->location }}" name="location">
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Save</button>
                                    <a href="{{ route('companies.index') }}" class="btn btn-primary w-md">Cancel</a>
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

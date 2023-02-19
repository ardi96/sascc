@extends('layouts.master')

@section('title') @lang('translation.Company_Create') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Companies @endslot
        @slot('title') Create Company @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <form method="POST" class="form-horizontal" action="{{ url('companies') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-4">
                            <label for="horizontal-username-input" class="col-sm-3 col-form-label">Company Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-username-input" name="name" required>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-contact-input" class="col-sm-3 col-form-label">Contact Person Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-contact-input" name="contact_person" required>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Contact Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="horizontal-email-input" name="contact_email" required>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-phone-input" class="col-sm-3 col-form-label">Contact Phone Number</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-phone-input" name="contact_phone_no" required>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-location-input" class="col-sm-3 col-form-label">Location</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-location-input" name="location" required>
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

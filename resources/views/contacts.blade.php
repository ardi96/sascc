@extends('layouts.master')

@section('title') @lang('translation.User_List') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Contacts @endslot
        @slot('title') Users List @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" style="width: 70px;">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">NRIC</th>
                                    <th scope="col">Date of Birth</th>
                                    <th scope="col">Mobile No</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                <tr>
                                    {{-- avatar --}}
                                    <td>
                                        <div class="avatar-xs">
                                                 <img class="rounded-circle avatar-xs"
                                                    src="{{ isset($contact->avatar) ? asset($contact->avatar) : asset('/assets/images/users/default-avatar.jpg') }}" alt="">
                                        </div>
                                    </td>

                                    {{-- Name  --}}
                                    <td>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{ $contact->name }}</a></h5>
                                        <p class="text-muted mb-0">{{ $contact->employer }} , {{ $contact->city }}</p>
                                    </td>
                                    {{-- Email --}}
                                    <td>
                                        {{ $contact->email }}
                                    </td>
                                    {{-- NRIC --}}
                                    <td>
                                        {{ $contact->nric }}
                                    </td>
                                    {{-- Dob --}}
                                    <td>
                                        {{ $contact->dob }}
                                    </td>
                                    {{-- Mobile  --}}
                                    <td>
                                        {{ $contact->mobileno }}
                                    </td>

                                    {{-- Action --}}
                                    <td>
                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                            <li class="list-inline-item px-2">
                                                <a href="" title="Message"><i class="bx bx-message-square-dots"></i></a>
                                            </li>
                                            <li class="list-inline-item px-2">
                                                <a href="" title="Profile"><i class="bx bx-user-circle"></i></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="pagination pagination-rounded justify-content-center mt-4">
                                <li class="page-item disabled">
                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">4</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">5</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

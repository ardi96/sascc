@extends('layouts.master-layouts')

@section('title') @lang('translation.Advances') @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
 
@endsection

@section('body')
    <body data-topbar="light" data-layout="horizontal" style="width:80%; margin:0 auto;">
@endsection

{{-- data-layout-size="boxed" --}}

@section('content')

@component('components.breadcrumb')
@slot('li_1') Salary Advance @endslot
@slot('title') Salary Advance Request @endslot
@endcomponent

@if ( session()->has('msg') )
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session()->get('msg') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        {{ session()->forget('msg') }}
    </div> 
@endif 

<div class="row">
    <div class="col-xl-12">
        @if ($advances)
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    
                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Requested Date</th>
                                <th scope="col">Requested Amount</th>
                                <th scope="col">Duration</th>
                                <th scope="col">Status</th>
                                <th scope="col" style="text-align: center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($advances as $item)
                                <tr>
                                    <td>
                                        {{ $item->id }}
                                    </td>

                                    <td>
                                        {{ date("d/m/Y", strtotime($item->requested_date)) }}
                                    </td>

                                    <td style="text-align: right">
                                        RM{{ $item->advance_amount }}
                                    </td>
                                    
                                    <td>
                                        {{ $item->duration }} Month(s)
                                    </td>

                                    <td>
                                        @if ( $item->status  == "1000" )
                                            Pending Verification
                                        @elseif ( $item->status  == "4000" )
                                            Verified
                                        @endif 
                                    </td>

                                    <td style="text-align:center">
                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                            <li class="list-inline-item px-2">
                                                {{-- <a href="{{ URL::route('advances.show',$item->id) }}" target="_new" title="Show"><i class="bx bx-show-alt"></i></a> --}}
                                                
                                                @if ( $item->status == "1000" )
                                                    <form id="frm_delete" style="float: right" method="POST" action="{{ route('advances.destroy',['advance'=>$item->id]) }}">
                                                        @method("DELETE")
                                                        @csrf
                                                        <a href="#" onclick="submit_form()">
                                                            <i class="bx bx-trash"></i></a> 
                                                    </form>
                                                @endif 

                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card --> 
        @else
            <div class="card">
                <div class="card-body">You don't have advance request.
                    <button type="button" class="btn btn-primary waves-effect waves-light" style="float:right"
                    onclick="window.location.href='{{ route('advances.create') }}'">
                        Request Salary Advance <i class="bx bx-right-arrow-circle font-size-16 align-middle me-2"></i> 
                    </button>
                </div>
            </div>
        @endif    
    </div>
</div>
<!-- end row -->
<div class="row">
    <div class="text-sm-end mt-2 mt-sm-0 mb-2">
        <button type="button" class="btn btn-primary waves-effect waves-light"
            onclick="window.location.href='{{ route('advances.create') }}'">
                Request Salary Advance <i class="bx bx-right-arrow-circle font-size-16 align-middle me-2"></i>
            </button>
    </div>
</div>
@endsection
@section('script')

<script>
    function submit_form()
    {
        let form = document.getElementById("frm_delete");
        if ( confirm('Are you sure you want to cancel your advance request ? '))
        {
            form.submit();
        }
    }   
</script>


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

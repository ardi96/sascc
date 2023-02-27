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


<div class="row">
    <div class="col-xl-12">
        @if ($advance)
        <div class="card">
            <div class="card-body">
                
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

@endsection
@section('script')

<script>
    function submit_form()
    {
        let form = document.getElementById("frm_delete");
        if ( confirm('Are you sure you want to delete ? '))
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

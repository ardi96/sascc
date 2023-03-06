

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Advances'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- DataTables -->
    <link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <body data-topbar="light" data-layout="horizontal" style="width:80%; margin:0 auto;">
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Salary Advance <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Salary Advance Request <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<?php if( session()->has('msg') ): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo e(session()->get('msg')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <?php echo e(session()->forget('msg')); ?>

    </div> 
<?php endif; ?> 

<div class="row">
    <div class="col-xl-12">
        <?php if($advances): ?>
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
                            <?php $__currentLoopData = $advances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <?php echo e($item->id); ?>

                                    </td>

                                    <td>
                                        <?php echo e(date("d/m/Y", strtotime($item->requested_date))); ?>

                                    </td>

                                    <td style="text-align: right">
                                        RM<?php echo e($item->advance_amount); ?>

                                    </td>
                                    
                                    <td>
                                        <?php echo e($item->duration); ?> Month(s)
                                    </td>

                                    <td>
                                        <?php if( $item->status  == "1000" ): ?>
                                            Pending Verification
                                        <?php elseif( $item->status  == "4000" ): ?>
                                            Verified
                                        <?php endif; ?> 
                                    </td>

                                    <td style="text-align:center">
                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                            <li class="list-inline-item px-2">
                                                
                                                
                                                <?php if( $item->status == "1000" ): ?>
                                                    <form id="frm_delete" style="float: right" method="POST" action="<?php echo e(route('advances.destroy',['advance'=>$item->id])); ?>">
                                                        <?php echo method_field("DELETE"); ?>
                                                        <?php echo csrf_field(); ?>
                                                        <a href="#" onclick="submit_form()">
                                                            <i class="bx bx-trash"></i></a> 
                                                    </form>
                                                <?php endif; ?> 

                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card --> 
        <?php else: ?>
            <div class="card">
                <div class="card-body">You don't have advance request.
                    <button type="button" class="btn btn-primary waves-effect waves-light" style="float:right"
                    onclick="window.location.href='<?php echo e(route('advances.create')); ?>'">
                        Request Salary Advance <i class="bx bx-right-arrow-circle font-size-16 align-middle me-2"></i> 
                    </button>
                </div>
            </div>
        <?php endif; ?>    
    </div>
</div>
<!-- end row -->
<div class="row">
    <div class="text-sm-end mt-2 mt-sm-0 mb-2">
        <button type="button" class="btn btn-primary waves-effect waves-light"
            onclick="window.location.href='<?php echo e(route('advances.create')); ?>'">
                Request Salary Advance <i class="bx bx-right-arrow-circle font-size-16 align-middle me-2"></i>
            </button>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

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
<script src="<?php echo e(URL::asset('/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

<!-- dashboard init -->
<script src="<?php echo e(URL::asset('assets/js/pages/dashboard.init.js')); ?>"></script>


<!-- Required datatable js -->
<script src="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/jszip/jszip.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/pdfmake/pdfmake.min.js')); ?>"></script>
<!-- Datatable init js -->
<script src="<?php echo e(URL::asset('/assets/js/pages/datatables.init.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\admin\resources\views/client/advance-list.blade.php ENDPATH**/ ?>


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


<div class="row">
    <div class="col-xl-12">
        <?php if($advance): ?>
        <div class="card">
            <div class="card-body">
                
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

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

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
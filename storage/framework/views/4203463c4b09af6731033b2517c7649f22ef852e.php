

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Dashboards'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- DataTables -->
    <link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <body data-topbar="light" data-layout="horizontal" style="width:80%; margin:0 auto;">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if( session()->has('msg') ): ?>
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <?php echo e(session()->get('msg')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <?php echo e(session()->forget('msg')); ?>

    </div> 
<?php endif; ?> 

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
            
                <div class="invoice-title d-flex justify-content-left">
                    <h2 class="font-size-18">Salary Advance Registration</h2>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <address>
                            <strong>Aplicant Name:</strong>
                            <?php echo e($client->name); ?><br>
                        </address>
                        <address>
                            <strong>NRIC:</strong>
                            <?php echo e($client->nric); ?><br>
                        </address>
                        <address>
                            <strong>Date of Birth:</strong>
                            <?php echo e(date('d-m-Y',strtotime($client->dob))); ?><br>
                        </address>
                        <address>
                            <strong>Email :</strong>
                            <?php echo e($client->email); ?><br>
                        </address>
                        <address>
                            <strong>Employer :</strong>
                            <?php echo e($company->name); ?><br>
                        </address>
                        <address class="mt-2 mt-sm-0">
                            <strong>Work Location:</strong>
                            <?php echo e($client->work_location); ?>

                        </address>
                        <address class="mt-2 mt-sm-0">
                            <strong>Duitnow ID:</strong>
                            <?php echo e($client->duitnow_id); ?>

                        </address>
                    </div>
                    
                    <div class="col-sm-6">
                        <address>
                            <strong>Bank Code: </strong>
                            <?php echo e($client->bank_code); ?><br>
                        </address>
                        <address>
                            <strong>Bank Acc. No.: </strong>
                            <?php echo e($client->bank_acc_no); ?><br>
                        </address>
                        <hr>
                        <address>
                            <strong>Address (1): </strong>
                            <?php echo e($client->address_1); ?><br>
                        </address>
                        <address>
                            <strong>Address (2): </strong>
                            <?php echo e($client->address_2); ?><br>
                        </address>
                        <address>
                            <strong>City: </strong>
                            <?php echo e($client->city); ?><br>
                        </address>
                        <address>
                            <strong>Post Code: </strong>
                            <?php echo e($client->post_code); ?><br>
                        </address>
                        <address>
                            <strong>State:</strong>
                            <?php echo e($client->state); ?><br>
                        </address>
                    </div>
                </div>
                <hr>
                <div class="d-print-none mt-4">
                    <?php if( $client->status < '4000'): ?>
                        <div class="float-start">
                            <form action="<?php echo e(route('manager.clientApproval', ['client_id' => $client->id] )); ?>" 
                                id="frm_approve"
                                method="POST">
                                <?php echo csrf_field(); ?> 
                                <a href="#" onclick="submit_form()" class="btn btn-primary waves-effect waves-light me-1"><i
                                    class="fa fa-check-circle"></i>  Approve...</a>
                            </form>
                        </div>
                    <?php endif; ?> 
                    <div class="float-end">
                        <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light me-1"><i
                                class="fa fa-print"></i>  Print</a>
                        <a href="<?php echo e(route('manager.index')); ?>" class="btn btn-secondary w-md waves-effect waves-light">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<script>
function submit_form()
{
    let form = document.getElementById("frm_approve");
    if ( confirm('Are you sure you want to approve?'))
    {
        form.submit();
    }
}   
</script>

<!-- apexcharts -->


<!-- dashboard init -->


<!-- Required datatable js -->
<script src="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/jszip/jszip.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/pdfmake/pdfmake.min.js')); ?>"></script>
<!-- Datatable init js -->
<script src="<?php echo e(URL::asset('/assets/js/pages/datatables.init.js')); ?>"></script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\admin\resources\views/manager/client-view.blade.php ENDPATH**/ ?>
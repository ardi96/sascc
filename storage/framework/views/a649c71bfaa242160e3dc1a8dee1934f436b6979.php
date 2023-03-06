

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Advance_Create'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')); ?>" rel="stylesheet" type="text/css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <body data-topbar="light" data-layout="horizontal" style="width:80%; margin:0 auto;">
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Advance <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Request Salary Advance <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="col-xl-12">
        <?php if($errors->any()): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            There was an error, please check your entries.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
        <?php endif; ?>

        <div class="card">
            <div class="card-body">
                <form class="form-horizontal" method="POST" enctype="multipart/form-data" 
                        action="<?php echo e(route('advances.store',$client)); ?>">
                        
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="client_id" value ="<?php echo e($client->id); ?>"">
                        
                        <div class="row mb-3">
                            <label for="requested_date" class="col-sm-3 col-form-label">When do you need it</label>
                            <div class="col-sm-9">
                                <div class="input-group" id="datepicker1">
                                    <input type="date" class="form-control <?php $__errorArgs = ['requested_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                    
                                    
                                    
                                    value="<?php echo e(old('requested_date', date('d-m-Y', strtotime(now())))); ?>" 
                                    
                                    name="requested_date" id="requested_date">
                                    
                                    <?php $__errorArgs = ['requested_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                
                                
                            </div>
                        </div>
                        <?php $__errorArgs = ['requested_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                            <strong>ERROR</strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="row mb-3">
                            <label for="salary" class="col-sm-3 col-form-label">How much do you want </label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control <?php $__errorArgs = ['advance_amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid 
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('advance_amount',$advance->advance_amount)); ?>" id="advance_amount" 
                                name="advance_amount" autofocus placeholder="Enter your advance request amount">
                                <div class="text-danger" id="advance_amount" data-ajax-feedback="advance_amount"></div>
                                
                                <?php $__errorArgs = ['advance_amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="duration" class="col-sm-3 col-form-label">Duration (in Months) </label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control <?php $__errorArgs = ['duration'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid 
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('duration',$advance->duration)); ?>" id="duration" name="duration" 
                                    autofocus placeholder="Enter duration of advance (in months)">
                                <div class="text-danger" id="duration" data-ajax-feedback="duration"></div>
                                <?php $__errorArgs = ['duration'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
    
                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <button class="btn btn-primary w-md" type="submit">Submit</button>
                                <a class="btn btn-secondary w-md" href="<?php echo e(route('advances.index')); ?>">Cancel</a>
                            </div>
                        </div>
                    </form>    
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<!-- apexcharts -->


<!-- dashboard init -->
<script src="<?php echo e(URL::asset('assets/js/pages/dashboard.init.js')); ?>"></script>

<script src="<?php echo e(URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')); ?>"></script>

<!-- Required datatable js -->

<!-- Datatable init js -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\admin\resources\views/client/advance-create.blade.php ENDPATH**/ ?>
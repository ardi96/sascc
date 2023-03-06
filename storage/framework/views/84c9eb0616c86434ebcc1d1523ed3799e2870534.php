

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Profile_View'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <body data-topbar="light" data-layout="horizontal" style="width:80%; margin:0 auto;">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Profile <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Registration Slip <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                            <div class="d-flex justify-content-center">
                                <img src="<?php echo e(URL::asset('/assets/images/scc_logo2.png')); ?>" alt="logo" height="60" />
                            </div>
                    </div>

                    <hr>

                    <div class="invoice-title d-flex justify-content-center">
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
                   
                    <div class="row mt-4">
                        <div class="col-sm-6">
                            <p>
                                The information on this website is for general informational purposes only. 
                                [Business name] makes no representation or warranty, express or implied. Your use of the site is solely at your own risk. This sitee may contain links to third party content, which we do not warrant, endorse, or assume liability for
                            </p>
                        </div>
                        <div class="col-sm-6 border-bottom border-dark">
                            <strong>Please provide your company approval (signature and chop) here: </strong>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                    <div class="d-print-none mt-4">
                        <div class="float-end">
                            <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light me-1"><i
                                    class="fa fa-print"></i>  Print</a>
                            <a href="<?php echo e(route('index')); ?>" class="btn btn-secondary w-md waves-effect waves-light">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\admin\resources\views/client/profile-view.blade.php ENDPATH**/ ?>
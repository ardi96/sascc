

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Company_View'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Companies <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> View Company <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Company Information</h4>
                    <div class="table-responsive">
                        <table class="table table-nowrap mb-0">
                            <tbody>
                                <tr>
                                    <th scope="row">Company Name :</th>
                                    <td><?php echo e($item->name); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Contact Person Name :</th>
                                    <td><?php echo e($item->contact_person); ?></td>
                                </tr>
                                
                                <tr>
                                    <th scope="row">Contact E-mail :</th>
                                    <td><?php echo e($item->contact_email); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Contact Phone Number :</th>
                                    <td><?php echo e($item->contact_phone_no); ?></td>
                                </tr>

                                <tr>
                                    <th scope="row">Location :</th>
                                    <td><?php echo e($item->location); ?></td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                    <a href="<?php echo e(route('companies.index')); ?>" class="btn btn-primary w-md mt-2">Back</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\admin\resources\views/scc/company-view.blade.php ENDPATH**/ ?>
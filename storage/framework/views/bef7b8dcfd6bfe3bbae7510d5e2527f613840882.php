

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.User_View'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Users <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> View User <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">User Information</h4>
                    <div class="table-responsive">
                        <table class="table table-nowrap mb-0">
                            <tbody>
                                <tr>
                                    <th scope="row">User Name :</th>
                                    <td><?php echo e($user->username); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Full Name :</th>
                                    <td><?php echo e($user->name); ?></td>
                                </tr>
                                
                                <tr>
                                    <th scope="row">E-mail :</th>
                                    <td><?php echo e($user->email); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Mobile No :</th>
                                    <td><?php echo e($user->mobileno); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Role :</th>
                                    <td>
                                        <input type="checkbox" class="form-check-input" <?php if( $user->roleid==1): ?> checked <?php endif; ?> <?php if(true): echo 'disabled'; endif; ?>>
                                        <label class="form-check-label"> SCC Admin</label><br>
                                        <input type="checkbox" class="form-check-input" <?php if( $user->roleid==2): ?> checked <?php endif; ?> <?php if(true): echo 'disabled'; endif; ?>>
                                        <label class="form-check-label"> Company/Employer</label><br>
                                        <input type="checkbox" class="form-check-input" <?php if( !isset($user->roleid)): ?> checked <?php endif; ?> <?php if(true): echo 'disabled'; endif; ?>>
                                        <label class="form-check-label"> Client/Employee</label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="<?php echo e(route('users.index')); ?>" class="btn btn-primary w-md mt-2">Back</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\admin\resources\views/scc/user-view.blade.php ENDPATH**/ ?>
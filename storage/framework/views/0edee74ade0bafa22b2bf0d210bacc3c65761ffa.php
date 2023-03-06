

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.User_Create'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Users <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Create User <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    
                    <form method="POST" class="form-horizontal" action="<?php echo e(url('users')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="row mb-4">
                            <label for="horizontal-username-input" class="col-sm-3 col-form-label">User Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-username-input" name="username" required>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-username-input" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="horizontal-username-input" name="password" required>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="horizontal-email-input" name="email" required>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-name-input" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-name-input" name="name" required>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Mobile Number</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-email-input" name="mobileno" required>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Role </label>
                            <div class="col-sm-9">
                                <select name="role_id" class="form-select" id="role_id" required>
                                    <option value="1">SCC Officer</option>
                                    <option value="2">Company/Employer</option>
                                </select>
                            </div>
                        </div>



                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" id="horizontalLayout-Check" name="locked" value="1">
                                    <label class="form-check-label" for="horizontalLayout-Check">
                                        Lock this user
                                    </label>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Save</button>
                                    <a href="<?php echo e(route('users.index')); ?>" class="btn btn-primary w-md">Cancel</a>
                                </div>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\admin\resources\views/scc/user-create.blade.php ENDPATH**/ ?>
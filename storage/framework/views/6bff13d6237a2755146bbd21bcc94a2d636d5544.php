

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Client_Import'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Clients <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Import Client <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    
                    <form method="POST" class="form-horizontal" action="<?php echo e(url('clients-import')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="row mb-4">
                            <label for="horizontal-filename-input" class="col-sm-3 col-form-label">File Name</label>

                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="file" class="form-control <?php $__errorArgs = ['filename'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="horizontal-filename-input" name="filename" autofocus>
                                    
                                </div>

                                <?php $__errorArgs = ['filename'];
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

                        <div class="row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Document Type</label>
                            <div class="col-sm-9">
                                <select name="roleid" class="form-select" id="roleid" required>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\admin\resources\views/scc/client-import.blade.php ENDPATH**/ ?>
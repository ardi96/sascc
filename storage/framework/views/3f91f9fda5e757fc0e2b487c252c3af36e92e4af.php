

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.User_List'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- DataTables -->
    <link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Users <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Users List <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="text-sm-end mt-2 mt-sm-0 mb-2">
                        <a href="users/create" class="btn btn-success">
                            <i class="mdi mdi-account-plus me-1"></i> New User </a>
                    </div>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" style="width: 70px;">#</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mobile No</th>
                                    <th scope="col" style="text-align: center">Locked</th>
                                    <th scope="col" style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <div class="avatar-xs">
                                                <img class="rounded-circle avatar-xs" src="<?php echo e(URL::asset($item->avatar)); ?>"
                                                alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <?php echo e($item->username); ?>

                                        </td>

                                        <td>
                                             <?php echo e($item->name); ?>

                                        </td>

                                        <td>
                                            <?php if($item->role_id == 1 ): ?>
                                                SCC Officer
                                            <?php elseif($item->role_id == 2): ?>
                                                Company/Employer
                                            <?php elseif($item->role_id == 3): ?>
                                                Client
                                            <?php endif; ?>
                                        </td>

                                        <td>
                                            <?php echo e($item->email); ?>

                                        </td>
                                        <td>
                                            <?php echo e($item->mobileno); ?>

                                        </td>

                                        <td style="text-align:center">
                                            <input class="form-check-input" type="checkbox" id="formCheck2" <?php if($item->locked): ?> checked <?php endif; ?> <?php if(true): echo 'disabled'; endif; ?>>
                                        </td>
                                        <td style="text-align:center">
                                            <ul class="list-inline font-size-20 contact-links mb-0">
                                                <li class="list-inline-item px-2">
                                                    <a href="/users/<?php echo e($item->id); ?>/edit" title="Edit"><i class="bx bx-edit-alt"></i></a>
                                                </li>
                                                <li class="list-inline-item px-2">
                                                    <a href="/users/<?php echo e($item->id); ?>" title="Show"><i class="bx bx-show-alt"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- Required datatable js -->
    <script src="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/jszip/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/pdfmake/pdfmake.min.js')); ?>"></script>
    <!-- Datatable init js -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/datatables.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\admin\resources\views/scc/user-list.blade.php ENDPATH**/ ?>
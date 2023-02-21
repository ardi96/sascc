

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Client_List'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- DataTables -->
    <link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Clients <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Client List <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">Client ID</th>
                                    <th scope="col">Client Name</th>
                                    <th scope="col">Work Location</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Post Code</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <?php echo e($item->id); ?>

                                        </td>

                                        <td>
                                            <?php echo e($item->name); ?>

                                        </td>

                                        <td>
                                            <?php echo e($item->work_location); ?>

                                        </td>

                                        <td>
                                            <?php echo e($item->email); ?>

                                        </td>

                                        <td>
                                            <?php echo e($item->mobileno); ?>

                                        </td>

                                        <td>
                                            <?php echo e($item->city); ?>

                                        </td>

                                        <td>
                                            <?php echo e($item->post_code); ?>

                                        </td>

                                        <td>
                                            <?php echo e($item->status); ?>

                                        </td>

                                        <td style="text-align:center">
                                            <ul class="list-inline font-size-20 contact-links mb-0">
                                                <li class="list-inline-item px-2">
                                                    <a href="/companies/<?php echo e($item->id); ?>/edit" title="Edit"><i class="bx bx-edit-alt"></i></a>
                                                </li>
                                                <li class="list-inline-item px-2">
                                                    <a href="/companies/<?php echo e($item->id); ?>" title="Show"><i class="bx bx-show-alt"></i></a>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\admin\resources\views/scc/client-list.blade.php ENDPATH**/ ?>
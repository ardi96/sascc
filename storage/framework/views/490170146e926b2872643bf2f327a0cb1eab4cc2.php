

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Company_List'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- DataTables -->
    <link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Companies <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Company List <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="text-sm-end mt-2 mt-sm-0 mb-2">
                        <a href="companies/create" class="btn btn-success">
                            <i class="mdi mdi-account-plus me-1"></i> New Company </a>
                    </div>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">Company ID</th>
                                    <th scope="col">Company Name</th>
                                    <th scope="col">Contact Person Name</th>
                                    <th scope="col">Contact Email</th>
                                    <th scope="col">Contact Phone Number</th>
                                    <th scope="col">Location</th>
                                    <th scope="col" style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <?php echo e($item->id); ?>

                                        </td>

                                        <td>
                                            <?php echo e($item->name); ?>

                                        </td>

                                        <td>
                                            <?php echo e($item->contact_person); ?>

                                        </td>

                                        <td>
                                            <?php echo e($item->contact_email); ?>

                                        </td>

                                        <td>
                                            <?php echo e($item->contact_phone_no); ?>

                                        </td>

                                        <td>
                                            <?php echo e($item->location); ?>

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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\admin\resources\views/scc/company-list.blade.php ENDPATH**/ ?>


<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.User_List'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Contacts <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Users List <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" style="width: 70px;">#</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mobile No</th>
                                    <th scope="col" style="text-align: center">Locked</th>
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
                                            <?php echo e($item->email); ?>

                                        </td>
                                        <td>
                                            <?php echo e($item->mobileno); ?>

                                        </td>
                                        <td style="text-align:center">
                                            <input class="form-check-input" type="checkbox" id="formCheck2" <?php if($item->locked): ?> checked <?php endif; ?> <?php if(true): echo 'disabled'; endif; ?>>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="pagination pagination-rounded justify-content-center mt-4">
                                <li class="page-item disabled">
                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">4</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">5</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\admin\resources\views/scc/user-list.blade.php ENDPATH**/ ?>
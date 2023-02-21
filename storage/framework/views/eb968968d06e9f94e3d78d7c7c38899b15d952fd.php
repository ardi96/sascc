

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
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">NRIC</th>
                                    <th scope="col">Date of Birth</th>
                                    <th scope="col">Mobile No</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    
                                    <td>
                                        <div class="avatar-xs">
                                                 <img class="rounded-circle avatar-xs"
                                                    src="<?php echo e(isset($contact->avatar) ? asset($contact->avatar) : asset('/assets/images/users/default-avatar.jpg')); ?>" alt="">
                                        </div>
                                    </td>

                                    
                                    <td>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($contact->name); ?></a></h5>
                                        <p class="text-muted mb-0"><?php echo e($contact->employer); ?> , <?php echo e($contact->city); ?></p>
                                    </td>
                                    
                                    <td>
                                        <?php echo e($contact->email); ?>

                                    </td>
                                    
                                    <td>
                                        <?php echo e($contact->nric); ?>

                                    </td>
                                    
                                    <td>
                                        <?php echo e($contact->dob); ?>

                                    </td>
                                    
                                    <td>
                                        <?php echo e($contact->mobileno); ?>

                                    </td>

                                    
                                    <td>
                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                            <li class="list-inline-item px-2">
                                                <a href="" title="Message"><i class="bx bx-message-square-dots"></i></a>
                                            </li>
                                            <li class="list-inline-item px-2">
                                                <a href="" title="Profile"><i class="bx bx-user-circle"></i></a>
                                            </li>
                                        </ul>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\admin\resources\views/contacts.blade.php ENDPATH**/ ?>


<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Profile'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')); ?>" rel="stylesheet" type="text/css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <body data-topbar="light" data-layout="horizontal" style="width:80%; margin:0 auto;">
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Profile <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Update Profile <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="col-xl-12">
        <?php if($errors->any()): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            There was an error, please check your entries.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
        <?php endif; ?>
    
        <div class="card">
            <div class="card-body">
                
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" 
                        action="<?php echo e(route('updateProfile',$client)); ?>">
                        
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="client_id" value ="<?php echo e($client->id); ?>"">
                        <div class="row mb-3">
                            <label for="useremail" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="useremail" 
                                value="<?php echo e(Auth::user()->email); ?>" name="email" placeholder="Enter email" autofocus>
                                <div class="text-danger" id="emailError" data-ajax-feedback="email"></div>
                                <?php $__errorArgs = ['email'];
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
    
                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="username" class="form-label">Username</label></div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(Auth::user()->username); ?>" 
                                id="username" name="name" disabled>
                                <div class="text-danger" id="usernameError" data-ajax-feedback="username"></div>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="name" class="form-label">Full Name</label></div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid 
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('name',$client->name)); ?>" id="name" name="name" autofocus placeholder="Enter Full Name">
                                <div class="text-danger" id="nameError" data-ajax-feedback="name"></div>
                                <?php $__errorArgs = ['name'];
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

                        <div class="row mb-3">
                            <label for="userdob" class="col-sm-3 col-form-label">Date of Birth</label>
                            <div class="col-sm-9">
                                <div class="input-group" id="datepicker1">
                                    <input type="text" class="form-control <?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="dd-mm-yyyy" 
                                    data-date-format="dd-mm-yyyy" data-date-container='#datepicker1' 
                                    data-date-end-date="0d" value="<?php echo e(date('d-m-Y', strtotime($client->dob))); ?>" data-provide="datepicker" name="dob" autofocus id="dob">
                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                </div>
                                <div class="text-danger" id="dobError" data-ajax-feedback="dob"></div>
                                <?php $__errorArgs = ['dob'];
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

                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="mobileno" class="form-label">Mobile Phone No. </label></div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?php $__errorArgs = ['mobileno'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid 
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('mobileno',$client->mobileno)); ?>" id="mobileno" name="mobileno" autofocus placeholder="Enter mobile phone number">
                                <div class="text-danger" id="mobileno" data-ajax-feedback="mobileno"></div>
                                <?php $__errorArgs = ['mobileno'];
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
                        
                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="nric" class="form-label">NRIC. </label></div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?php $__errorArgs = ['nric'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid 
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('nric',$client->nric)); ?>" id="nric" name="nric" autofocus placeholder="Enter NRIC">
                                <div class="text-danger" id="nric" data-ajax-feedback="nric"></div>
                                <?php $__errorArgs = ['nric'];
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

                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="address_1" class="form-label">Address Line 1 </label></div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?php $__errorArgs = ['address_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid 
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('address_1',$client->address_1)); ?>" id="address_1" name="address_1" autofocus placeholder="Enter Address">
                                <div class="text-danger" id="address_1" data-ajax-feedback="address_1"></div>
                                <?php $__errorArgs = ['address_1'];
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
                        
                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="address_2" class="form-label">Address Line 2 </label></div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?php $__errorArgs = ['address_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid 
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('address_2',$client->address_2)); ?>" id="address_2" name="address_2" autofocus placeholder="Enter Address">
                                <div class="text-danger" id="address_2" data-ajax-feedback="address_2"></div>
                                <?php $__errorArgs = ['address_2'];
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
                        
                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="city" class="form-label">City </label></div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid 
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('city',$client->city)); ?>" id="city" name="city" autofocus placeholder="Enter City">
                                <div class="text-danger" id="city" data-ajax-feedback="city"></div>
                                <?php $__errorArgs = ['city'];
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
                      
                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="post_code" class="form-label">Post Code </label></div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?php $__errorArgs = ['post_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid 
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('post_code',$client->post_code)); ?>" id="post_code" name="post_code" autofocus placeholder="Enter Post Code">
                                <div class="text-danger" id="post_code" data-ajax-feedback="post_code"></div>
                                <?php $__errorArgs = ['post_code'];
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

                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="state" class="form-label">State </label></div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?php $__errorArgs = ['state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid 
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('state',$client->state)); ?>" id="state" name="state" autofocus placeholder="Enter State">
                                <div class="text-danger" id="state" data-ajax-feedback="state"></div>
                                <?php $__errorArgs = ['state'];
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
    
                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="work_location" class="form-label">Work Location </label></div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?php $__errorArgs = ['work_location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid 
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('work_location',$client->work_location)); ?>" id="work_location" name="work_location" autofocus placeholder="Enter location of your office">
                                <div class="text-danger" id="work_location" data-ajax-feedback="work_location"></div>
                                <?php $__errorArgs = ['work_location'];
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
                       
                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="salary" class="form-label">Salary/Month </label></div>
                            <div class="col-sm-9">
                                <input type="number" class="form-control <?php $__errorArgs = ['salary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid 
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('salary',$client->salary)); ?>" id="salary" name="salary" autofocus placeholder="Enter your last drawn salary">
                                <div class="text-danger" id="salary" data-ajax-feedback="salary"></div>
                                <?php $__errorArgs = ['salary'];
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
                        
                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="company_id" class="form-label">Employer </label></div>
                            <div class="col-sm-9">
                                <select name="company_id" class="form-select" id="company_id" required>
                                    <option value="-1">Other</option>
                                    <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>" <?php if( old('company_id',$item->id) == $client->company_id): ?> selected <?php endif; ?>) ><?php echo e($item->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['company_id'];
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

                        
                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <button class="btn btn-primary w-md" type="submit">Update</button>
                                <a class="btn btn-secondary w-md" href="<?php echo e(route('index')); ?>">Cancel</a>
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

<?php $__env->startSection('script'); ?>
<!-- apexcharts -->


<!-- dashboard init -->
<script src="<?php echo e(URL::asset('assets/js/pages/dashboard.init.js')); ?>"></script>

<script src="<?php echo e(URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')); ?>"></script>

<!-- Required datatable js -->

<!-- Datatable init js -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\admin\resources\views/client/profile-update.blade.php ENDPATH**/ ?>
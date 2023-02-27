

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Documents'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- DataTables -->
    <link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <body data-topbar="light" data-layout="horizontal" style="width:80%; margin:0 auto;">
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Document <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Document Upload <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>



<div class="row">
    <div class="col-xl-12">
    
        <div class="card">
            <div class="card-body">
                
                <form method="POST" class="form-horizontal" action="<?php echo e(url('/documents')); ?>" enctype="multipart/form-data">
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
unset($__errorArgs, $__bag); ?>" id="horizontal-filename-input" name="filename" autofocus required>
                                
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
                            <select name="document_type" class="form-select" id="roleid" required>
                                <?php $__currentLoopData = $document_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->document_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="horizontal-description-input" class="col-sm-3 col-form-label">File Description</label>

                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control" id="horizontal-description-input" name="description" autofocus>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-sm-9">
                            <div>
                                <button type="submit" class="btn btn-primary w-md">Uplad</button>
                                <a href="<?php echo e(route('index')); ?>" class="btn btn-primary w-md">Back</a>
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
<!-- end row -->

<?php if( session()->has('msg') ): ?>
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <?php echo e(session()->get('msg')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <?php echo e(session()->forget('msg')); ?>

    </div> 
<?php endif; ?> 

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">Document Type</th>
                                <th scope="col">Uploaded Date</th>
                                <th scope="col">Description</th>
                                <th scope="col">Status</th>
                                <th scope="col" style="text-align: center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <?php echo e($item->document_name); ?>

                                    </td>

                                    <td>
                                        <?php echo e(date("d/m/Y", strtotime($item->uploaded_date))); ?>

                                    </td>

                                    <td>
                                        <?php echo e($item->description); ?>

                                    </td>

                                    <td>
                                        <?php if( $item->status  == "1000" ): ?>
                                            Pending Verification
                                        <?php elseif( $item->status  == "4000" ): ?>
                                            Verified
                                        <?php endif; ?> 
                                    </td>

                                    <td style="text-align:center">
                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                            <li class="list-inline-item px-2">
                                                <a href="<?php echo e($item->filename); ?>" target="_new" title="Show"><i class="bx bx-show-alt"></i></a>
                                                
                                                <?php if( $item->status == "1000" ): ?>
                                                    <form id="frm_delete" style="float: right" method="POST" action="<?php echo e(route('client-documents.destroy',['id'=>$item->id])); ?>">
                                                        <?php echo csrf_field(); ?>
                                                        <a href="#" onclick="submit_form()">
                                                            <i class="bx bx-trash"></i></a> 
                                                    </form>
                                                <?php endif; ?> 
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

    <div class="col-xl-8">

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<script>
    function submit_form()
    {
        let form = document.getElementById("frm_delete");
        if ( confirm('Are you sure you want to delete ? '))
        {
            form.submit();
        }
    }   
</script>


<!-- apexcharts -->
<script src="<?php echo e(URL::asset('/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

<!-- dashboard init -->
<script src="<?php echo e(URL::asset('assets/js/pages/dashboard.init.js')); ?>"></script>


<!-- Required datatable js -->
<script src="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/jszip/jszip.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/pdfmake/pdfmake.min.js')); ?>"></script>
<!-- Datatable init js -->
<script src="<?php echo e(URL::asset('/assets/js/pages/datatables.init.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\admin\resources\views/client/document-upload.blade.php ENDPATH**/ ?>
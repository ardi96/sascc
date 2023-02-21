

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Documents'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <body data-topbar="light" data-layout="horizontal" >
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Document <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Document List <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="col-xl-4">

    </div>

    <div class="col-xl-8">

    </div>
</div>

<!-- end row -->


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- apexcharts -->
<script src="<?php echo e(URL::asset('/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

<!-- dashboard init -->
<script src="<?php echo e(URL::asset('assets/js/pages/dashboard.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\admin\resources\views/client/document-list.blade.php ENDPATH**/ ?>


<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Dashboards'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <body data-topbar="light" data-layout="horizontal">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Dashboards <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Dashboard <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="col-xl-4">
        <div class="card overflow-hidden">
            <div class="bg-primary bg-soft">
                <div class="row">
                    <div class="col-7">
                        <div class="text-primary p-3">
                            <h5 class="text-primary">Welcome Back !</h5>
                            <p><?php echo e(Str::ucfirst(Auth::user()->name)); ?></p>
                        </div>
                    </div>
                    <div class="col-5 align-self-end">
                        <img src="<?php echo e(URL::asset('/assets/images/profile-img.png')); ?>" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="avatar-md profile-user-wid mb-4">
                            <img src="<?php echo e(isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg')); ?>" alt="" class="img-thumbnail rounded-circle">
                        </div>
                        
                        <p class="text-muted mb-0 text-truncate">Kementrian Pendidikan</p>
                    </div>

                    <div class="col-sm-8">
                        <div class="pt-4">

                            <div class="row">
                                <div class="col-6">
                                    <h5 class="font-size-15">125</h5>
                                    <p class="text-muted mb-0">Projects</p>
                                </div>
                                <div class="col-6">
                                    <h5 class="font-size-15">$1245</h5>
                                    <p class="text-muted mb-0">Revenue</p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="" class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    <div class="col-xl-8">
        <div class="row">
            
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Subscription Status</p>
                                <h4 class="mb-0">Active</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                    <span class="avatar-title">
                                        <i class="bx bx-copy-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Current Balance</p>
                                <h4 class="mb-0">MYR 0.00</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center ">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-archive-in font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Subscription Expiry Date</p>
                                <h4 class="mb-0">29 Oct, 2024</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex flex-wrap">
                    <h4 class="card-title mb-4">Latest Transactions</h4>
                    <div class="ms-auto">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Week</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Month</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Year</a>
                            </li>
                        </ul>
                    </div>
                </div>

                
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 20px;">
                                    <div class="form-check font-size-16 align-middle">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck01">
                                        <label class="form-check-label" for="transactionCheck01"></label>
                                    </div>
                                </th>
                                <th class="align-middle">Reference</th>
                                <th class="align-middle">Description</th>
                                <th class="align-middle">Date</th>
                                <th class="align-middle">Total</th>
                                <th class="align-middle">Payment Status</th>
                                <th class="align-middle">Payment Method</th>
                                <th class="align-middle">View Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck02">
                                        <label class="form-check-label" for="transactionCheck02"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2540</a> </td>
                                <td>Advance Salary</td>
                                <td>
                                    07 Oct, 2019
                                </td>
                                <td>
                                    400.00
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-mastercard me-1"></i> Duitnow
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck03">
                                        <label class="form-check-label" for="transactionCheck03"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2541</a> </td>
                                <td>Repayment</td>
                                <td>
                                    27 Oct, 2019
                                </td>
                                <td>
                                    -400.00
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-visa me-1"></i> Salary Deduction
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck04">
                                        <label class="form-check-label" for="transactionCheck04"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2542</a> </td>
                                <td>Service Charge</td>
                                <td>
                                    27 Oct, 2019
                                </td>
                                <td>
                                    10.00
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck05">
                                        <label class="form-check-label" for="transactionCheck05"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2543</a> </td>
                                <td>Repayment</td>
                                <td>
                                    27 Oct, 2019
                                </td>
                                <td>
                                    -10.00
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-mastercard me-1"></i> Salary Deduction
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>
                            
                            
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->

            </div>
        </div>
    </div>
</div>
<!-- end row -->




<!-- Transaction Modal -->
<div class="modal fade transaction-detailModal" tabindex="-1" role="dialog" aria-labelledby="transaction-detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="transaction-detailModalLabel">Order Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
                <p class="mb-4">Billing Name: <span class="text-primary">Neal Matthews</span></p>

                <div class="table-responsive">
                    <table class="table align-middle table-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div>
                                        <img src="<?php echo e(URL::asset('/assets/images/product/img-7.png')); ?>" alt="" class="avatar-sm">
                                    </div>
                                </th>
                                <td>
                                    <div>
                                        <h5 class="text-truncate font-size-14">Wireless Headphone (Black)</h5>
                                        <p class="text-muted mb-0">$ 225 x 1</p>
                                    </div>
                                </td>
                                <td>$ 255</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div>
                                        <img src="<?php echo e(URL::asset('/assets/images/product/img-4.png')); ?>" alt="" class="avatar-sm">
                                    </div>
                                </th>
                                <td>
                                    <div>
                                        <h5 class="text-truncate font-size-14">Phone patterned cases</h5>
                                        <p class="text-muted mb-0">$ 145 x 1</p>
                                    </div>
                                </td>
                                <td>$ 145</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6 class="m-0 text-right">Sub Total:</h6>
                                </td>
                                <td>
                                    $ 400
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6 class="m-0 text-right">Shipping:</h6>
                                </td>
                                <td>
                                    Free
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6 class="m-0 text-right">Total:</h6>
                                </td>
                                <td>
                                    $ 400
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

<!-- subscribeModal -->

<!-- end modal -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- apexcharts -->
<script src="<?php echo e(URL::asset('/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

<!-- dashboard init -->
<script src="<?php echo e(URL::asset('assets/js/pages/dashboard.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\admin\resources\views/index.blade.php ENDPATH**/ ?>
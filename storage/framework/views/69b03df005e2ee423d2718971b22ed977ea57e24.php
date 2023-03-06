<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="/index" class="logo logo-dark">
                    <span class="logo-sm">
                        
                    </span>
                    <span class="logo-lg">
                        
                        <img src="<?php echo e(URL::asset('/assets/images/scc-logo-black.png')); ?>" alt="" height="48">
                    </span>
                </a>

                <a href="/index" class="logo logo-light">
                    <span class="logo-sm">
                        
                    </span>
                    <span class="logo-lg">
                        
                        <img src="<?php echo e(URL::asset('/assets/images/scc-logo-black.png')); ?>" alt="" height="48">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

           <!-- App Search-->
           

        <div class="dropdown dropdown-mega d-none d-lg-block ms-2">
            <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                
                <span key="t-megamenu">Quick Menu</span>
                <i class="mdi mdi-chevron-down"></i>
            </button>

            <div class="dropdown-menu dropdown-megamenu">
                <div class="row">
                    <div class="col-sm-8">

                        <div class="row">
                            <div class="col-md-4">
                                <h5 class="font-size-14 mt-0" key="t-ui-components"><?php echo app('translator')->get('translation.UI_Components'); ?></h5>
                                <ul class="list-unstyled megamenu-list">
                                    <li>
                                        <a href="javascript:void(0);" key="t-lightbox"><?php echo app('translator')->get('translation.Lightbox'); ?></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-range-slider"><?php echo app('translator')->get('translation.Range_Slider'); ?></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-sweet-alert"><?php echo app('translator')->get('translation.Sweet_Alert'); ?></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-rating"><?php echo app('translator')->get('translation.Rating'); ?></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-forms"><?php echo app('translator')->get('translation.Forms'); ?></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-tables"><?php echo app('translator')->get('translation.Tables'); ?></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-charts"><?php echo app('translator')->get('translation.Charts'); ?></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-4">
                                <h5 class="font-size-14 mt-0" key="t-applications"><?php echo app('translator')->get('translation.Applications'); ?></h5>
                                <ul class="list-unstyled megamenu-list">
                                    <li>
                                        <a href="javascript:void(0);" key="t-ecommerce"><?php echo app('translator')->get('translation.Ecommerce'); ?></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-calendar"><?php echo app('translator')->get('translation.Calendars'); ?></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-email"><?php echo app('translator')->get('translation.Email'); ?></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-projects"><?php echo app('translator')->get('translation.Projects'); ?></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-tasks"><?php echo app('translator')->get('translation.Tasks'); ?></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-contacts"><?php echo app('translator')->get('translation.Contacts'); ?></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-4">
                                <h5 class="font-size-14 mt-0" key="t-extra-pages"><?php echo app('translator')->get('translation.Extra_Pages'); ?></h5>
                                <ul class="list-unstyled megamenu-list">
                                    <li>
                                        <a href="javascript:void(0);" key="t-light-sidebar"><?php echo app('translator')->get('translation.Light_Sidebar'); ?></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-compact-sidebar"><?php echo app('translator')->get('translation.Compact_Sidebar'); ?></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-horizontal"><?php echo app('translator')->get('translation.Horizontal_layout'); ?></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-maintenance"><?php echo app('translator')->get('translation.Maintenance'); ?></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-coming-soon"><?php echo app('translator')->get('translation.Coming_Soon'); ?></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-timeline"><?php echo app('translator')->get('translation.Timeline'); ?></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-faqs"><?php echo app('translator')->get('translation.FAQs'); ?></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-6">
                                <h5 class="font-size-14 mt-0" key="t-ui-components"><?php echo app('translator')->get('translation.UI_Components'); ?></h5>
                                <ul class="list-unstyled megamenu-list">
                                    <li>
                                        <a href="javascript:void(0);" key="t-lightbox"><?php echo app('translator')->get('translation.Lightbox'); ?></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-range-slider"><?php echo app('translator')->get('translation.Range_Slider'); ?></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-sweet-alert"><?php echo app('translator')->get('translation.Sweet_Alert'); ?></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-rating"><?php echo app('translator')->get('translation.Rating'); ?></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-forms"><?php echo app('translator')->get('translation.Forms'); ?></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-tables"><?php echo app('translator')->get('translation.Tables'); ?></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-charts"><?php echo app('translator')->get('translation.Charts'); ?></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-sm-5">
                                <div>
                                    <img src="<?php echo e(URL::asset ('/assets/images/megamenu-img.png')); ?>" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="d-flex">

        <div class="dropdown d-inline-block d-lg-none ms-2">
            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="mdi mdi-magnify"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                aria-labelledby="page-header-search-dropdown">

                <form class="p-3">
                    <div class="form-group m-0">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="<?php echo app('translator')->get('translation.Search'); ?>" aria-label="Search input">

                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle header-profile-user" src="<?php echo e(isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg')); ?>"
                    alt="Header Avatar">
                <span class="d-none d-xl-inline-block ms-1" key="t-henry"><?php echo e(ucfirst(Auth::user()->name)); ?></span>
                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <!-- item-->
                <a class="dropdown-item" href="contacts-profile"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile"><?php echo app('translator')->get('translation.Profile'); ?></span></a>
                
                <a class="dropdown-item d-block" href="#" data-bs-toggle="modal" data-bs-target=".change-password"><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Change Password</span></a>
                <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen"><?php echo app('translator')->get('translation.Lock_screen'); ?></span></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout"><?php echo app('translator')->get('translation.Logout'); ?></span></a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        </div>
        
    </div>
</div>
</header>
<!--  Change-Password example -->
<div class="modal fade change-password" tabindex="-1" role="dialog"
aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" id="change-password">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" value="<?php echo e(Auth::user()->id); ?>" id="data_id">
                    <div class="mb-3">
                        <label for="current_password">Current Password</label>
                        <input id="current-password" type="password"
                            class="form-control <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            name="current_password" autocomplete="current_password"
                            placeholder="Enter Current Password" value="<?php echo e(old('current_password')); ?>">
                        <div class="text-danger" id="current_passwordError" data-ajax-feedback="current_password"></div>
                    </div>

                    <div class="mb-3">
                        <label for="newpassword">New Password</label>
                        <input id="password" type="password"
                            class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password"
                            autocomplete="new_password" placeholder="Enter New Password">
                        <div class="text-danger" id="passwordError" data-ajax-feedback="password"></div>
                    </div>

                    <div class="mb-3">
                        <label for="userpassword">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            autocomplete="new_password" placeholder="Enter New Confirm password">
                        <div class="text-danger" id="password_confirmError" data-ajax-feedback="password-confirm"></div>
                    </div>

                    <div class="mt-3 d-grid">
                        <button class="btn btn-primary waves-effect waves-light UpdatePassword" data-id="<?php echo e(Auth::user()->id); ?>"
                            type="submit">Update Password</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php /**PATH C:\xampp\htdocs\admin\resources\views/layouts/topbar.blade.php ENDPATH**/ ?>
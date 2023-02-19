<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu"><?php echo app('translator')->get('translation.Menu'); ?></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user"></i>
                        
                        <span key="t-dashboards">User and Clients</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="users" key="t-default">Users</a></li>
                        <li><a href="companies" key="t-saas">Companies</a></li>
                        <li><a href="clients" key="t-crypto">Clients</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Advance Requests</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow"
                                key="t-vertical"><?php echo app('translator')->get('translation.Vertical'); ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-light-sidebar"
                                        key="t-light-sidebar"><?php echo app('translator')->get('translation.Light_Sidebar'); ?></a></li>
                                <li><a href="layouts-compact-sidebar"
                                        key="t-compact-sidebar"><?php echo app('translator')->get('translation.Compact_Sidebar'); ?></a></li>
                                <li><a href="layouts-icon-sidebar"
                                        key="t-icon-sidebar"><?php echo app('translator')->get('translation.Icon_Sidebar'); ?></a></li>
                                <li><a href="layouts-boxed" key="t-boxed-width"><?php echo app('translator')->get('translation.Boxed_Width'); ?></a>
                                </li>
                                <li><a href="layouts-preloader" key="t-preloader"><?php echo app('translator')->get('translation.Preloader'); ?></a>
                                </li>
                                <li><a href="layouts-colored-sidebar"
                                        key="t-colored-sidebar"><?php echo app('translator')->get('translation.Colored_Sidebar'); ?></a></li>
                                <li><a href="layouts-scrollable" key="t-scrollable"><?php echo app('translator')->get('translation.Scrollable'); ?></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow"
                                key="t-horizontal"><?php echo app('translator')->get('translation.Horizontal'); ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-horizontal" key="t-horizontal"><?php echo app('translator')->get('translation.Horizontal'); ?></a>
                                </li>
                                <li><a href="layouts-hori-topbar-light"
                                        key="t-topbar-light"><?php echo app('translator')->get('translation.Topbar_Light'); ?></a></li>
                                <li><a href="layouts-hori-boxed-width"
                                        key="t-boxed-width"><?php echo app('translator')->get('translation.Boxed_Width'); ?></a></li>
                                <li><a href="layouts-hori-preloader"
                                        key="t-preloader"><?php echo app('translator')->get('translation.Preloader'); ?></a></li>
                                <li><a href="layouts-hori-colored-header"
                                        key="t-colored-topbar"><?php echo app('translator')->get('translation.Colored_Header'); ?></a></li>
                                <li><a href="layouts-hori-scrollable"
                                        key="t-scrollable"><?php echo app('translator')->get('translation.Scrollable'); ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span key="t-multi-level"><?php echo app('translator')->get('translation.Multi_Level'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);" key="t-level-1-1"><?php echo app('translator')->get('translation.Level_1.1'); ?></a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow"
                                key="t-level-1-2"><?php echo app('translator')->get('translation.Level_1.2'); ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);" key="t-level-2-1"><?php echo app('translator')->get('translation.Level_2.1'); ?></a>
                                </li>
                                <li><a href="javascript: void(0);" key="t-level-2-2"><?php echo app('translator')->get('translation.Level_2.2'); ?></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<?php /**PATH F:\xampp\htdocs\admin\resources\views/layouts/scc-sidebar.blade.php ENDPATH**/ ?>
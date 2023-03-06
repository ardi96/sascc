<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    
                    <div class="nav-item">
                        <a href="<?php echo e(route('manager.index')); ?>"  
                        class="nav-link" key="t-chat" role="button"><i class="bx bx-home me-2"></i><?php echo app('translator')->get('translation.Home'); ?></a>
                    </div>
                                        
                    <div class="nav-item">    
                        <a href="<?php echo e(route('manager.companyEdit')); ?>" class="nav-link" 
                        key="t-file-manager"><i class="bx bx-id-card me-2"></i><?php echo app('translator')->get('translation.Company_Details'); ?></a>
                    </div>
                    
                </ul>
            </div>
        </nav>
    </div>
</div><?php /**PATH C:\xampp\htdocs\admin\resources\views/components/manager-menu.blade.php ENDPATH**/ ?>
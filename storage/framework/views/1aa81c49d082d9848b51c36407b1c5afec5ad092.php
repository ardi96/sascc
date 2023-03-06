<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    
                    <div class="nav-item">
                        <a href="<?php echo e(route('index')); ?>"  
                        class="nav-link" key="t-chat" role="button"><i class="bx bx-home me-2"></i><?php echo app('translator')->get('translation.Home'); ?></a>
                    </div>
                    
                    <div class="nav-item">
                        <a href="<?php echo e(route('client.documents')); ?>" 
                        class="nav-link" 
                        key="t-file-manager"><i class="bx bx-file me-2"></i><?php echo app('translator')->get('translation.Documents'); ?></a>
                    </div>
                    
                    <div class="nav-item">
                        <a href="/profile-update" class="nav-link" 
                        key="t-file-manager"><i class="bx bx-user-check me-2"></i><?php echo app('translator')->get('translation.Profile_Update'); ?></a>
                    </div>
                    
                    <div class="nav-item">    
                        <a href="<?php echo e(route('profile.view')); ?>" class="nav-link" 
                        key="t-file-manager"><i class="bx bx-id-card me-2"></i><?php echo app('translator')->get('translation.Registration_Slip'); ?></a>
                    </div>
                    
                    <div class="nav-item">
                        <a href="<?php echo e(route('advances.index')); ?>" class="nav-link" 
                        key="t-file-manager"><i class="bx bx-money me-2"></i><?php echo app('translator')->get('translation.Advance_Request'); ?></a>
                    </div>

                </ul>
            </div>
        </nav>
    </div>
</div><?php /**PATH C:\xampp\htdocs\admin\resources\views/components/scc-menu.blade.php ENDPATH**/ ?>
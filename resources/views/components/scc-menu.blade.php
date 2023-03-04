<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                            <i class="bx bx-customize me-2"></i><span key="t-apps">@lang('translation.Application_Link')</span>
                            <div class="arrow-down"></div>
                        </a>
                    
                        <div class="dropdown-menu" aria-labelledby="topnav-pages">
                            <a href="{{ route('index') }}" class="dropdown-item" key="t-chat"><i class="bx bx-home me-2"></i>@lang('translation.Home')</a>
                            <a href="{{ route('client.documents') }}" class="dropdown-item" key="t-file-manager"><i class="bx bx-file me-2"></i>@lang('translation.Documents')</a>
                            <a href="/profile-update" class="dropdown-item" key="t-file-manager"><i class="bx bx-user-check me-2"></i>@lang('translation.Profile_Update')</a>
                            <a href="{{ route('profile.view')}}" class="dropdown-item" key="t-file-manager"><i class="bx bx-id-card me-2"></i>@lang('translation.Registration_Slip')</a>
                            <a href="{{ route('advances.index')}}" class="dropdown-item" key="t-file-manager"><i class="bx bx-money me-2"></i>@lang('translation.Advance_Request')</a>
                        </div>

                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
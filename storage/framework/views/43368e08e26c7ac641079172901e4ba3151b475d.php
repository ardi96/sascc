<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
            <div class="collapse navbar-collapse" id="topnav-menu-content">

                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                            <i class="bx bx-customize me-2"></i><span key="t-apps"><?php echo app('translator')->get('translation.Apps'); ?></span>
                            <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-pages">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-calendar" role="button">
                                    <span key="t-email"><?php echo app('translator')->get('translation.Calendars'); ?></span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-calendar">
                                    <a href="calendar" class="dropdown-item" key="t-tui-calendar"><?php echo app('translator')->get('translation.TUI_Calendar'); ?></a>
                                    <a href="calendar-full" class="dropdown-item" key="t-full-calendar"><?php echo app('translator')->get('translation.Full_Calendar'); ?></a>
                                </div>
                            </div>
                            <a href="chat" class="dropdown-item" key="t-chat"><?php echo app('translator')->get('translation.Chat'); ?></a>
                            <a href="apps-filemanager" class="dropdown-item" key="t-file-manager"><?php echo app('translator')->get('translation.File_Manager'); ?></a>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email" role="button">
                                    <span key="t-email"><?php echo app('translator')->get('translation.Email'); ?></span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-email">
                                    <a href="email-inbox" class="dropdown-item" key="t-inbox"><?php echo app('translator')->get('translation.Inbox'); ?></a>
                                    <a href="email-read" class="dropdown-item" key="t-read-email"><?php echo app('translator')->get('translation.Read_Email'); ?></a>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-blog" role="button">
                                            <span key="t-email-templates"><?php echo app('translator')->get('translation.Templates'); ?></span>
                                            <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-blog">
                                            <a href="email-template-basic" class="dropdown-item" key="t-basic-action"><?php echo app('translator')->get('translation.Basic_Action'); ?></a>
                                            <a href="email-template-alert" class="dropdown-item" key="t-alert-email"><?php echo app('translator')->get('translation.Alert_Email'); ?></a>
                                            <a href="email-template-billing" class="dropdown-item" key="t-bill-email"><?php echo app('translator')->get('translation.Billing_Email'); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce" role="button">
                                    <span key="t-ecommerce"><?php echo app('translator')->get('translation.Ecommerce'); ?></span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                    <a href="ecommerce-products" class="dropdown-item" key="t-products"><?php echo app('translator')->get('translation.Products'); ?></a>
                                    <a href="ecommerce-product-detail" class="dropdown-item" key="t-product-detail"><?php echo app('translator')->get('translation.Product_Detail'); ?></a>
                                    <a href="ecommerce-orders" class="dropdown-item" key="t-orders"><?php echo app('translator')->get('translation.Orders'); ?></a>
                                    <a href="ecommerce-customers" class="dropdown-item" key="t-customers"><?php echo app('translator')->get('translation.Customers'); ?></a>
                                    <a href="ecommerce-cart" class="dropdown-item" key="t-cart"><?php echo app('translator')->get('translation.Cart'); ?></a>
                                    <a href="ecommerce-checkout" class="dropdown-item" key="t-checkout"><?php echo app('translator')->get('translation.Checkout'); ?></a>
                                    <a href="ecommerce-shops" class="dropdown-item" key="t-shops"><?php echo app('translator')->get('translation.Shops'); ?></a>
                                    <a href="ecommerce-add-product" class="dropdown-item" key="t-add-product"><?php echo app('translator')->get('translation.Add_Product'); ?></a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-crypto" role="button">
                                    <span key="t-crypto"><?php echo app('translator')->get('translation.Crypto'); ?></span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-crypto">
                                    <a href="crypto-wallet" class="dropdown-item" key="t-wallet"><?php echo app('translator')->get('translation.Wallet'); ?></a>
                                    <a href="crypto-buy-sell" class="dropdown-item" key="t-buy"><?php echo app('translator')->get('translation.Buy_Sell'); ?></a>
                                    <a href="crypto-exchange" class="dropdown-item" key="t-exchange"><?php echo app('translator')->get('translation.Exchange'); ?></a>
                                    <a href="crypto-lending" class="dropdown-item" key="t-lending"><?php echo app('translator')->get('translation.Lending'); ?></a>
                                    <a href="crypto-orders" class="dropdown-item" key="t-orders"><?php echo app('translator')->get('translation.Orders'); ?></a>
                                    <a href="crypto-kyc-application" class="dropdown-item" key="t-kyc"><?php echo app('translator')->get('translation.KYC_Application'); ?></a>
                                    <a href="crypto-ico-landing" class="dropdown-item" key="t-ico"><?php echo app('translator')->get('translation.ICO_Landing'); ?></a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-project" role="button">
                                    <span key="t-projects"><?php echo app('translator')->get('translation.Projects'); ?></span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-project">
                                    <a href="projects-grid" class="dropdown-item" key="t-p-grid"><?php echo app('translator')->get('translation.Projects_Grid'); ?></a>
                                    <a href="projects-list" class="dropdown-item" key="t-p-list"><?php echo app('translator')->get('translation.Projects_List'); ?></a>
                                    <a href="projects-overview" class="dropdown-item" key="t-p-overview"><?php echo app('translator')->get('translation.Project_Overview'); ?></a>
                                    <a href="projects-create" class="dropdown-item" key="t-create-new"><?php echo app('translator')->get('translation.Create_New'); ?></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-task" role="button">
                                    <span key="t-tasks"><?php echo app('translator')->get('translation.Tasks'); ?></span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-task">
                                    <a href="tasks-list" class="dropdown-item" key="t-task-list"><?php echo app('translator')->get('translation.Task_List'); ?></a>
                                    <a href="tasks-kanban" class="dropdown-item" key="t-kanban-board"><?php echo app('translator')->get('translation.Kanban_Board'); ?></a>
                                    <a href="tasks-create" class="dropdown-item" key="t-create-task"><?php echo app('translator')->get('translation.Create_Task'); ?></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-contact" role="button">
                                    <span key="t-contacts"><?php echo app('translator')->get('translation.Contacts'); ?></span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-contact">
                                    <a href="contacts-grid" class="dropdown-item" key="t-user-grid"><?php echo app('translator')->get('translation.User_Grid'); ?></a>
                                    <a href="contacts-list" class="dropdown-item" key="t-user-list"><?php echo app('translator')->get('translation.User_List'); ?></a>
                                    <a href="contacts-profile" class="dropdown-item" key="t-profile"><?php echo app('translator')->get('translation.Profile'); ?></a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-blog" role="button">
                                    <span key="t-blog"><?php echo app('translator')->get('translation.Blog'); ?></span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-blog">
                                    <a href="blog-list" class="dropdown-item" key="t-blog-list"><?php echo app('translator')->get('translation.Blog_List'); ?></a>
                                    <a href="blog-grid" class="dropdown-item" key="t-blog-grid"><?php echo app('translator')->get('translation.Blog_Grid'); ?></a>
                                    <a href="blog-details" class="dropdown-item" key="t-blog-details"><?php echo app('translator')->get('translation.Blog_Details'); ?></a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-jobs" role="button">
                                    <span key="t-jobs"><?php echo app('translator')->get('translation.Jobs'); ?></span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-jobs">
                                    <a href="job-list" class="dropdown-item" key="t-job-list"><?php echo app('translator')->get('translation.Job_List'); ?></a>
                                    <a href="job-grid" class="dropdown-item" key="t-job-grid"><?php echo app('translator')->get('translation.Job_Grid'); ?></a>
                                    <a href="job-apply" class="dropdown-item" key="t-apply-job"><?php echo app('translator')->get('translation.Apply_Job'); ?></a>
                                    <a href="job-details" class="dropdown-item" key="t-job-details"><?php echo app('translator')->get('translation.Job_Details'); ?></a>
                                    <a href="job-categories" class="dropdown-item" key="t-Jobs-categories"><?php echo app('translator')->get('translation.Jobs_Categories'); ?></a>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-candidate" role="button">
                                            <span key="t-candidate"><?php echo app('translator')->get('translation.Candidate'); ?></span>
                                            <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-candidate">
                                            <a href="candidate-list" class="dropdown-item" key="t-list"><?php echo app('translator')->get('translation.List'); ?></a>
                                            <a href="candidate-overview" class="dropdown-item" key="t-overview"><?php echo app('translator')->get('translation.Overview'); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button">
                            <i class="bx bx-collection me-2"></i><span key="t-components"><?php echo app('translator')->get('translation.Components'); ?></span>
                            <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-components">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form" role="button">
                                    <span key="t-forms"><?php echo app('translator')->get('translation.Forms'); ?></span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-form">
                                    <a href="form-elements" class="dropdown-item" key="t-form-elements"><?php echo app('translator')->get('translation.Form_Elements'); ?></a>
                                    <a href="form-layouts" class="dropdown-item" key="t-form-layouts"><?php echo app('translator')->get('translation.Form_Layouts'); ?></a>
                                    <a href="form-validation" class="dropdown-item" key="t-form-validation"><?php echo app('translator')->get('translation.Form_Validation'); ?></a>
                                    <a href="form-advanced" class="dropdown-item" key="t-form-advanced"><?php echo app('translator')->get('translation.Form_Advanced'); ?></a>
                                    <a href="form-editors" class="dropdown-item" key="t-form-editors"><?php echo app('translator')->get('translation.Form_Editors'); ?></a>
                                    <a href="form-uploads" class="dropdown-item" key="t-form-upload"><?php echo app('translator')->get('translation.Form_File_Upload'); ?></a>
                                    <a href="form-xeditable" class="dropdown-item" key="t-form-xeditable"><?php echo app('translator')->get('translation.Form_Xeditable'); ?></a>
                                    <a href="form-repeater" class="dropdown-item" key="t-form-repeater"><?php echo app('translator')->get('translation.Form_Repeater'); ?></a>
                                    <a href="form-wizard" class="dropdown-item" key="t-form-wizard"><?php echo app('translator')->get('translation.Form_Wizard'); ?></a>
                                    <a href="form-mask" class="dropdown-item" key="t-form-mask"><?php echo app('translator')->get('translation.Form_Mask'); ?></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table" role="button">
                                    <span key="t-tables"><?php echo app('translator')->get('translation.Tables'); ?></span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-table">
                                    <a href="tables-basic" class="dropdown-item" key="t-basic-tables"><?php echo app('translator')->get('translation.Basic_Tables'); ?></a>
                                    <a href="tables-datatable" class="dropdown-item" key="t-data-tables"><?php echo app('translator')->get('translation.Data_Tables'); ?></a>
                                    <a href="tables-responsive" class="dropdown-item" key="t-responsive-table"><?php echo app('translator')->get('translation.Responsive_Table'); ?></a>
                                    <a href="tables-editable" class="dropdown-item" key="t-editable-table"><?php echo app('translator')->get('translation.Editable_Table'); ?></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts" role="button">
                                    <span key="t-charts"><?php echo app('translator')->get('translation.Charts'); ?></span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                    <a href="charts-apex" class="dropdown-item" key="t-apex-charts"><?php echo app('translator')->get('translation.Apex_Charts'); ?></a>
                                    <a href="charts-echart" class="dropdown-item" key="t-e-charts"><?php echo app('translator')->get('translation.E_Charts'); ?></a>
                                    <a href="charts-chartjs" class="dropdown-item" key="t-chartjs-charts"><?php echo app('translator')->get('translation.Chartjs_Charts'); ?></a>
                                    <a href="charts-flot" class="dropdown-item" key="t-flot-charts"><?php echo app('translator')->get('translation.Flot_Charts'); ?></a>
                                    <a href="charts-tui" class="dropdown-item" key="t-ui-charts"><?php echo app('translator')->get('translation.Toast_UI_Charts'); ?></a>
                                    <a href="charts-knob" class="dropdown-item" key="t-knob-charts"><?php echo app('translator')->get('translation.Jquery_Knob_Charts'); ?></a>
                                    <a href="charts-sparkline" class="dropdown-item" key="t-sparkline-charts"><?php echo app('translator')->get('translation.Sparkline_Charts'); ?></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons" role="button">
                                    <span key="t-icons"><?php echo app('translator')->get('translation.Icons'); ?></span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                    <a href="icons-boxicons" class="dropdown-item" key="t-boxicons"><?php echo app('translator')->get('translation.Boxicons'); ?></a>
                                    <a href="icons-materialdesign" class="dropdown-item" key="t-material-design"><?php echo app('translator')->get('translation.Material_Design'); ?></a>
                                    <a href="icons-dripicons" class="dropdown-item" key="t-dripicons"><?php echo app('translator')->get('translation.Dripicons'); ?></a>
                                    <a href="icons-fontawesome" class="dropdown-item" key="t-font-awesome"><?php echo app('translator')->get('translation.Font_awesome'); ?></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map" role="button">
                                    <span key="t-maps"><?php echo app('translator')->get('translation.Maps'); ?></span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-map">
                                    <a href="maps-google" class="dropdown-item" key="t-g-maps"><?php echo app('translator')->get('translation.Google_Maps'); ?></a>
                                    <a href="maps-vector" class="dropdown-item" key="t-v-maps"><?php echo app('translator')->get('translation.Vector_Maps'); ?></a>
                                    <a href="maps-leaflet" class="dropdown-item" key="t-l-maps"><?php echo app('translator')->get('translation.Leaflet_Maps'); ?></a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button">
                            <i class="bx bx-file me-2"></i><span key="t-extra-pages"><?php echo app('translator')->get('translation.Extra_Pages'); ?></span>
                            <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-invoice" role="button">
                                    <span key="t-invoices"><?php echo app('translator')->get('translation.Invoices'); ?></span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-invoice">
                                    <a href="invoices-list" class="dropdown-item" key="t-invoice-list"><?php echo app('translator')->get('translation.Invoice_List'); ?></a>
                                    <a href="invoices-detail" class="dropdown-item" key="t-invoice-detail"><?php echo app('translator')->get('translation.Invoice_Detail'); ?></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth" role="button">
                                    <span key="t-authentication"><?php echo app('translator')->get('translation.Authentication'); ?></span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                    <a href="auth-login" class="dropdown-item" key="t-login"><?php echo app('translator')->get('translation.Login'); ?></a>
                                    <a href="auth-login-2" class="dropdown-item" key="t-login-2"><?php echo app('translator')->get('translation.Login'); ?> 2</a>
                                    <a href="auth-register" class="dropdown-item" key="t-register"><?php echo app('translator')->get('translation.Register'); ?></a>
                                    <a href="auth-register-2" class="dropdown-item" key="t-register-2"><?php echo app('translator')->get('translation.Register'); ?> 2</a>
                                    <a href="auth-recoverpw" class="dropdown-item" key="t-recover-password"><?php echo app('translator')->get('translation.Recover_Password'); ?></a>
                                    <a href="auth-recoverpw-2" class="dropdown-item" key="t-recover-password-2"><?php echo app('translator')->get('translation.Recover_Password'); ?> 2</a>
                                    <a href="auth-lock-screen" class="dropdown-item" key="t-lock-screen"><?php echo app('translator')->get('translation.Lock_Screen'); ?></a>
                                    <a href="auth-lock-screen-2" class="dropdown-item" key="t-lock-screen-2"><?php echo app('translator')->get('translation.Lock_Screen'); ?> 2</a>
                                    <a href="auth-confirm-mail" class="dropdown-item" key="t-confirm-mail"><?php echo app('translator')->get('translation.Confirm_Mail'); ?></a>
                                    <a href="auth-confirm-mail-2" class="dropdown-item" key="t-confirm-mail-2"><?php echo app('translator')->get('translation.Confirm_Mail'); ?> 2</a>
                                    <a href="auth-email-verification" class="dropdown-item" key="t-email-verification"><?php echo app('translator')->get('translation.Email_verification'); ?></a>
                                    <a href="auth-email-verification-2" class="dropdown-item" key="t-email-verification-2"><?php echo app('translator')->get('translation.Email_verification'); ?> 2</a>
                                    <a href="auth-two-step-verification" class="dropdown-item" key="t-two-step-verification"><?php echo app('translator')->get('translation.Two_step_verification'); ?></a>
                                    <a href="auth-two-step-verification-2" class="dropdown-item" key="t-two-step-verification-2"><?php echo app('translator')->get('translation.Two_step_verification'); ?> 2</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility" role="button">
                                    <span key="t-utility"><?php echo app('translator')->get('translation.Utility'); ?></span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                    <a href="pages-starter" class="dropdown-item" key="t-starter-page"><?php echo app('translator')->get('translation.Starter_Page'); ?></a>
                                    <a href="pages-maintenance" class="dropdown-item" key="t-maintenance"><?php echo app('translator')->get('translation.Maintenance'); ?></a>
                                    <a href="pages-comingsoon" class="dropdown-item" key="t-coming-soon"><?php echo app('translator')->get('translation.Coming_Soon'); ?></a>
                                    <a href="pages-timeline" class="dropdown-item" key="t-timeline"><?php echo app('translator')->get('translation.Timeline'); ?></a>
                                    <a href="pages-faqs" class="dropdown-item" key="t-faqs"><?php echo app('translator')->get('translation.FAQs'); ?></a>
                                    <a href="pages-pricing" class="dropdown-item" key="t-pricing"><?php echo app('translator')->get('translation.Pricing'); ?></a>
                                    <a href="pages-404" class="dropdown-item" key="t-error-404"><?php echo app('translator')->get('translation.Error_404'); ?></a>
                                    <a href="pages-500" class="dropdown-item" key="t-error-500"><?php echo app('translator')->get('translation.Error_500'); ?></a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div><?php /**PATH F:\xampp\htdocs\admin\resources\views/components/scc-menu.blade.php ENDPATH**/ ?>
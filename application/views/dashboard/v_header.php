<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title><?php echo $title; ?> Page</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.ico">
        
        <!-- DataTables -->
        <link href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="<?php echo base_url(); ?>assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="<?php echo base_url() ?>assets/plugins/bootstrap-rating/bootstrap-rating.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() ?>assets/register/css/bootstrap-datepicker.min.css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/css/icheck-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/plugins/iCheck/all.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css" />
    </head>


    <body>
        <?php foreach($da as $row){ $email= $row->email; $nama = $row->nama; } ?>
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        </div>

        <div class="header-bg">
            <!-- Navigation Bar-->
            <header id="topnav">
                <div class="topbar-main">
                    <div class="container-fluid">
                        <!-- Logo-->
                        <div>
                            <a href="<?php echo site_url() ?>" class="logo">
                                <img src="<?php echo base_url() ?>assets/images/logo.png" alt="" height="26"> 
                            </a>
                        </div>
                        <!-- End Logo-->

                        <div class="menu-extras topbar-custom navbar p-0">
                            <ul class="list-inline d-none d-lg-block mb-0">
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                    <i class="mdi mdi-file-alert-outline"> Biodata</i></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-animated">
                                        <a class="dropdown-item" href="<?php echo site_url(); ?>Biodata/isi_biodata">Isi Biodata</a>
                                        <a class="dropdown-item" href="<?php echo site_url(); ?>Biodata">Lihat Biodata</a>
                                    </div>
                                </li>
                                <!-- <li class="list-inline-item notification-list">
                                    <a href="<?php echo site_url(); ?>Informasi_prodi" class="nav-link waves-effect">
                                        Informasi Prodi
                                    </a>
                                </li> -->
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                    <i class="mdi mdi-settings-outline"> Pengelolaan</i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-animated">
                                        <a class="dropdown-item" href="<?php echo site_url(); ?>Pengelolaan/data_prodi">Pengelolaan Data Prodi</a>
                                        <a class="dropdown-item" href="<?php echo site_url(); ?>Pengelolaan/data_camaba">Pengelolaan Data CAMABA</a>
                                        <a class="dropdown-item" href="<?php echo site_url(); ?>Pengelolaan/data_pengukuran">Pengelolaan Data Pengukuran</a>
                                        <a class="dropdown-item" href="<?php echo site_url(); ?>Pengelolaan/data_hasil">Pengelolaan Data Hasil Tes</a>
                                    </div>
                                </li>
                                <!-- <li class="list-inline-item notification-list">
                                    <a href="#" class="nav-link waves-effect">
                                        Biodata
                                    </a>
                                </li> -->
    
                            </ul>

                            <ul class="list-inline ml-auto mb-0">
                                <!-- User-->
                                <li class="list-inline-item dropdown notification-list nav-user">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                        <img src="<?php echo base_url() ?>assets/images/users/avatar-6.jpg" alt="user" class="rounded-circle">
                                        <span class="d-none d-md-inline-block ml-1"><?php echo $nama; ?> <i class="mdi mdi-chevron-down"></i> </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                        <a class="dropdown-item" href="<?php echo site_url(); ?>login/ubah_password"><i class="dripicons-lock text-muted"></i> Ubah Password</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?php echo site_url(); ?>login/logout"><i class="dripicons-exit text-muted"></i> Logout</a>
                                    </div>
                                </li>
                                <li class="menu-item list-inline-item">
                                    <!-- Mobile menu toggle-->
                                    <a class="navbar-toggle nav-link">
                                        <div class="lines">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </a>
                                    <!-- End mobile menu toggle-->
                                </li>

                            </ul>

                        </div>
                        <!-- end menu-extras -->

                        <div class="clearfix"></div>

                    </div> <!-- end container -->
                </div>
                <!-- end topbar-main -->

                <!-- MENU Start -->
                <div class="navbar-custom">
                    
                    <div class="container-fluid">
                        
                        <div id="navigation">

                            <!-- Navigation Menu-->
                            <ul class="navigation-menu">
                            <!--<li class="has-submenu">
                                    <a href="index.html"><i class="dripicons-home"></i> Dashboard</a>
                                </li> -->
                                <li class="has-submenu">
                                    <a href="<?php echo site_url(); ?>Dashboard"><i class="dripicons-home"></i> Dashboard</a>
                                </li>

                                <li class="has-submenu">
                                    <a href="<?php echo site_url(); ?>Informasi_prodi"><i class="dripicons-archive"></i> Program Studi</a>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-information"></i> Tes Kepribadian <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                    <ul class="submenu">
                                        <li class="has-submenu">
                                            <a href="#">Tes Holland</a>
                                            <ul class="submenu">
                                                <li><a href="<?php echo site_url(); ?>Dashboard/tes_holland1">Tes Holland 1</a></li>
                                                <li><a href="<?php echo site_url(); ?>Dashboard/tes_holland2">Tes Holland 2</a></li>
                                            </ul>
                                        </li>

                                        <li class="has-submenu">
                                            <a href="#">Tes Big Five</a>
                                            <ul class="submenu">
                                                <li><a href="<?php echo site_url(); ?>Dashboard/tes_big_five1">Tes Big Five 1</a></li>
                                                <li><a href="<?php echo site_url(); ?>Dashboard/tes_big_five2">Tes Big Five 2</a></li>
                                                <li><a href="<?php echo site_url(); ?>Dashboard/tes_big_five3">Tes Big Five 3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="has-submenu mulai-test" style="color:#fff;">
                                    <a href="<?php echo site_url(); ?>Tes" style="color:#fff;"><span> Mulai Tes</span></a>
                                </li>

                                <!-- <li class="has-submenu">
                                    <a href="#"><i class="dripicons-suitcase"></i> User Interface <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                    <ul class="submenu megamenu">
                                        <li>
                                            <ul>
                                                <li><a href="ui-alerts.html">Alerts</a></li>
                                                <li><a href="ui-badge.html">Badge</a></li>
                                                <li><a href="ui-buttons.html">Buttons</a></li>
                                                <li><a href="ui-cards.html">Cards</a></li>
                                                <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                                <li><a href="ui-navs.html">Navs</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                                <li><a href="ui-modals.html">Modals</a></li>
                                                <li><a href="ui-images.html">Images</a></li>
                                                <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                                <li><a href="ui-pagination.html">Pagination</a></li>
                                                <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li><a href="ui-spinner.html">Spinner</a></li>
                                                <li><a href="ui-carousel.html">Carousel</a></li>
                                                <li><a href="ui-video.html">Video</a></li>
                                                <li><a href="ui-typography.html">Typography</a></li>
                                                <li><a href="ui-grid.html">Grid</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-help"></i> Components <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                    <ul class="submenu">
                                        <li class="has-submenu">
                                            <a href="#">Icons</a>
                                            <ul class="submenu">
                                                <li><a href="icons-material.html">Material Design</a></li>
                                                <li><a href="icons-ion.html">Ion Icons</a></li>
                                                <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                                <li><a href="icons-themify.html">Themify Icons</a></li>
                                                <li><a href="icons-dripicons.html">Dripicons</a></li>
                                                <li><a href="icons-typicons.html">Typicons Icons</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="calendar.html">Calendar</a>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#">Charts </a>
                                            <ul class="submenu">
                                                <li><a href="charts-morris.html">Morris Chart</a></li>
                                                <li><a href="charts-chartist.html">Chartist Chart</a></li>
                                                <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                                                <li><a href="charts-flot.html">Flot Chart</a></li>
                                                <li><a href="charts-c3.html">C3 Chart</a></li>
                                                <li><a href="charts-other.html">Jquery Knob Chart</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#">Forms</a>
                                            <ul class="submenu">
                                                <li><a href="form-elements.html">Form Elements</a></li>
                                                <li><a href="form-validation.html">Form Validation</a></li>
                                                <li><a href="form-advanced.html">Form Advanced</a></li>
                                                <li><a href="form-editors.html">Form Editors</a></li>
                                                <li><a href="form-uploads.html">Form File Upload</a></li>
                                                <li><a href="form-mask.html">Form Mask</a></li>
                                                <li><a href="form-summernote.html">Summernote</a></li>
                                                <li><a href="form-xeditable.html">Form Xeditable</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#">Tables </a>
                                            <ul class="submenu">
                                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                                <li><a href="tables-datatable.html">Data Table</a></li>
                                                <li><a href="tables-responsive.html">Responsive Table</a></li>
                                                <li><a href="tables-editable.html">Editable Table</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#">Maps</a>
                                            <ul class="submenu">
                                                <li><a href="maps-google.html"> Google Map</a></li>
                                                <li><a href="maps-vector.html"> Vector Map</a></li>
                                            </ul>
                                        </li>
    
                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-archive"></i> Advanced UI <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                    <ul class="submenu">
                                        <li><a href="advanced-alertify.html">Alertify</a></li>
                                        <li><a href="advanced-rating.html">Rating</a></li>
                                        <li><a href="advanced-nestable.html">Nestable</a></li>
                                        <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                                        <li><a href="advanced-sweet-alert.html">Sweet-Alert 2</a></li>
                                        <li><a href="advanced-lightbox.html">Lightbox</a></li>
                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-duplicate"></i> Pages <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                    <ul class="submenu megamenu">
                                        <li>
                                            <ul>
                                                <li><a href="pages-pricing.html">Pricing</a></li>
                                                <li><a href="pages-invoice.html">Invoice</a></li>
                                                <li><a href="pages-timeline.html">Timeline</a></li>
                                                <li><a href="pages-faqs.html">FAQs</a></li>
                                                <li><a href="pages-blank.html">Blank Page</a></li>
                                                <li><a href="pages-login.html">Login</a></li>
                                                <li><a href="pages-register.html">Register</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                                <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                                <li><a href="pages-404.html">Error 404</a></li>
                                                <li><a href="pages-500.html">Error 500</a></li>
                                                <li><a href="pages-maintenance.html">Maintenance</a></li>
                                                <li><a href="pages-comingsoon.html">Coming Soon</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> -->

                            </ul>
                            <!-- End navigation menu -->
                        </div> <!-- end #navigation -->
                    </div> <!-- end container -->
                </div> <!-- end navbar-custom -->
            </header>
            <!-- End Navigation Bar-->

        </div>
        <!-- header-bg -->

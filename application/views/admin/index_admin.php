<?php
$uid = $this->encryption->decrypt(@$this->session->userdata('uid'));
$user = $this->my_library->get_user_info($uid);
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=(@$page_title)?$page_title:'C.L Courier System'?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url('/resources/vendor/bootstrap-3.3.7/css/bootstrap.min.css') ?>">
    <!-- Load Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('/resources/vendor/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
    <!-- Load DataTable -->
    <link rel="stylesheet" href="<?= base_url('/resources/vendor/DataTables-1.10.13/css/dataTables.bootstrap.min.css')?>">
    <!-- Load Select2-->
    <link rel="stylesheet" href="<?=base_url('/resources/vendor/select2-4.0.3/css/select2.min.css')?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('/resources/layout/css/layout.css') ?>">
    <!-- PAGE LEVEL CSS -->
    <!--todo->sarath: load page level CSS-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>C.L</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>C.L</b> Air Express</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <!--todo->sarath: change user image-->
                                                <img src="<?= base_url('/resources/images/user2-160x160.jpg') ?>"
                                                     class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                </ul>
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Design some buttons
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%"
                                                     role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                     aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!--todo->sarath: change user image-->
                            <img src="<?= base_url().$user['user_profile_picture'] ?>" class="user-image"
                                 alt="User Image">
                            <span class="hidden-xs"><?=$user['user_display_name']?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <!--todo->sarath: change user image-->
                                <img src="<?= base_url().$user['user_profile_picture'] ?>" class="img-circle"
                                     alt="User Image">

                                <p>
	                                <?=$user['user_display_name']?>
                                    <small><?=$user['user_position']?></small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <!--<li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row
                            </li>-->
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <!--todo->sarath: link to profile-->
                                    <a href="#" class="btn btn-info btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <!--link to logout-->
                                    <a href="<?=base_url('authentication/authentication_c/logout')?>" class="btn btn-danger btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- todo->sarath: search menu with AJAX -->
            <!--<div class="sidebar-form">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Menu ...">
                    <span class="input-group-btn">
                        <button id="search-btn" class="btn btn-flat">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </div>-->
            <!-- /.search form -->
            <!-- sidebar menu -->
            <ul class="sidebar-menu">
                <li class="header">HOME</li>
                <li class="<?=(@$sub_menu == 'Dashboard')?'current':null?>">
                    <a href="<?=site_url('/admin/dashboard_admin_c')?>">
                        <i class="fa fa-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="header">AWB MANAGEMENT</li>
                <li class="treeview <?=(@$main_menu == 'AWB Management')?'active':null?>"> <!--required .active-->
                    <a href="javascript:;">
                        <i class="fa fa-barcode"></i>
                        <span>AWB Number</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu <?=(@$main_menu == 'AWB Management')?'menu-open':null?>"> <!-- required .menu-open-->
                        <!--fixme: style error at collapse-->
                        <li class="<?=(@$sub_menu == 'AWB Number')?'current':null?>"> <!--required .current-->
                            <a href="<?=site_url('admin/awb_management_admin_c/list_awb_number')?>">
                                <i class="fa fa-list"></i>
                                <span>AWB Number</span>
                            </a>
                        </li>
                        <li class="<?=(@$sub_menu == 'AWB Pool')?'current':null?>">
                            <a href="<?=site_url('admin/awb_management_admin_c/list_awb_pool_number')?>">
                                <i class="fa fa-plus"></i>
                                <span>AWB Pool</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--more menu come here-->
                <li class="header">LOCATION MANAGEMENT</li>
                <li class="treeview <?=(@$main_menu == 'Country')?'active':null?>">
                    <a href="javascript:;">
                        <i class="fa fa-flag"></i>
                        <span>Country</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu <?=(@$main_menu == 'Country')?'menu-open':null?>"> <!-- required .menu-open-->
                        <li class="<?=(@$sub_menu == 'Add Country')?'current':null?>"> <!--required .current-->
                            <a href="<?=site_url('admin/country_admin_c/form_add_country')?>">
                                <i class="fa fa-plus"></i>
                                <span>Add Country</span>
                            </a>
                        </li>
                        <li class="<?=(@$sub_menu == 'List Country')?'current':null?>">
                            <a href="<?=site_url('admin/country_admin_c/list_country')?>">
                                <i class="fa fa-list"></i>
                                <span>List Country</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="treeview <?=(@$main_menu == 'State/Province')?'active':null?>">
                    <a href="javascript:;">
                        <i class="fa fa-location-arrow" aria-hidden="true"></i>
                        <span>State/Province</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu <?=(@$main_menu == 'State/Province')?'menu-open':null?>"> <!-- required .menu-open-->
                        <li class="<?=(@$sub_menu == 'Add State/Province')?'current':null?>"> <!--required .current-->
                            <a href="<?=site_url('admin/state_province_admin_c/form_add_state_province')?>">
                                <i class="fa fa-plus"></i>
                                <span>Add State/Province</span>
                            </a>
                        </li>
                        <li class="<?=(@$sub_menu == 'List State/Province')?'current':null?>">
                            <a href="<?=site_url('admin/state_province_admin_c/list_state_province')?>">
                                <i class="fa fa-list"></i>
                                <span>List State/Province</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="treeview <?=(@$main_menu == 'City/District')?'active':null?>">
                    <a href="javascript:;">
                        <i class="fa fa-compass" aria-hidden="true"></i>
                        <span>City/District</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu <?=(@$main_menu == 'City/District')?'menu-open':null?>"> <!-- required .menu-open-->
                        <li class="<?=(@$sub_menu == 'Add City/District')?'current':null?>"> <!--required .current-->
                            <a href="<?=site_url('admin/city_district_admin_c/form_add_city_district')?>">
                                <i class="fa fa-plus"></i>
                                <span>Add City/District</span>
                            </a>
                        </li>
                        <li class="<?=(@$sub_menu == 'List City/District')?'current':null?>">
                            <a href="<?=site_url('admin/city_district_admin_c/list_city_district')?>">
                                <i class="fa fa-list"></i>
                                <span>List City/District</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="header">ROUTE MANAGEMENT</li>
                <li class="treeview <?=(@$main_menu == 'Product Route')?'active':null?>">
                    <a href="javascript:;">
                        <i class="fa fa-share" aria-hidden="true"></i>
                        <span>Product Route</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu <?=(@$main_menu == 'Product Route')?'menu-open':null?>"> <!-- required .menu-open-->
                        <li class="<?=(@$sub_menu == 'Add Product Route')?'current':null?>"> <!--required .current-->
                            <a href="#">
                                <i class="fa fa-plus"></i>
                                <span>Add Product Route</span>
                            </a>
                        </li>
                        <li class="<?=(@$sub_menu == 'List Product Route')?'current':null?>">
                            <a href="#">
                                <i class="fa fa-list"></i>
                                <span>List Product Route</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="treeview <?=(@$main_menu == 'Service Route')?'active':null?>">
                    <a href="javascript:;">
                        <i class="fa fa-share" aria-hidden="true"></i>
                        <span>Service Route</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu <?=(@$main_menu == 'Service Route')?'menu-open':null?>"> <!-- required .menu-open-->
                        <li class="<?=(@$sub_menu == 'Add Service Route')?'current':null?>"> <!--required .current-->
                            <a href="#">
                                <i class="fa fa-plus"></i>
                                <span>Add Service Route</span>
                            </a>
                        </li>
                        <li class="<?=(@$sub_menu == 'List Service Route')?'current':null?>">
                            <a href="#">
                                <i class="fa fa-list"></i>
                                <span>List Service Route</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
            </ul>
            <!-- END sidebar menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <?=@$page_header?>
                <small><?=@$page_header_small?></small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- content come here under this section -->
            <?php
                $this->load->view(@$page);
            ?>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- =============================================== -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            v-1.0.0
        </div>
        Copyright &copy; 2017 <a href="#">SarathLUN</a>. All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- =============================================== -->

<!-- jQuery 3.1.1 -->
<script src="<?= base_url('/resources/vendor/jquery/jquery-3.1.1.min.js') ?>" type="text/javascript"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('/resources/vendor/bootstrap-3.3.7/js/bootstrap.min.js') ?>"></script>
<!-- Load DataTable -->
<script src="<?=base_url('/resources/vendor/DataTables-1.10.13/js/jquery.dataTables.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('/resources/vendor/DataTables-1.10.13/js/dataTables.bootstrap.min.js')?>" type="text/javascript"></script>
<!-- Load Select2-->
<script src="<?=base_url('/resources/vendor/select2-4.0.3/js/select2.full.min.js')?>" type="text/javascript"></script>
<!-- LAYOUT LEVEL todo->sarath: need to apply ajax search of menu -->
<script src="<?= base_url('/resources/layout/js/layout.js') ?>"></script>
<!-- PAGE LEVEL -->
<!--todo->sarath: page level js come here-->
<script src="<?=@$page_level_js?>" type="text/javascript"></script>
</body>
</html>

<?php
$uid = @$this->session->userdata('uid');
$u_info = $this->my_library->get_user_info($uid);
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=(@$page_title)?$page_title:'C.L Courier System'?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?=base_url()?>/resources/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url()?>/resources/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?=base_url()?>/resources/plugins/ionicons/css/ionicons.min.css">
    <!-- DataTable-->
    <link rel="stylesheet" href="<?=base_url()?>/resources/plugins/datatable/css/dataTables.bootstrap.min.css">
    <!-- Select2-->
    <link rel="stylesheet" href="<?=base_url()?>/resources/plugins/select2/select2.min.css">
    <!-- DatePicker-->
    <link rel="stylesheet" href="<?=base_url()?>/resources/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
    <!--iCheck-->
    <link rel="stylesheet" href="<?=base_url()?>/resources/plugins/iCheck/all.css">
    
    <!-- AdminLTE Theme -->
    <link rel="stylesheet" href="<?=base_url()?>resources/AdminLTE/css/AdminLTE.css">
    <link rel="stylesheet" href="<?=base_url()?>resources/AdminLTE/css/skins/skin-red.min.css">
    <!--Global Custom CSS-->
    <link rel="stylesheet" href="<?=base_url()?>/resources/custom/css/custom_admin.css">
    <!--Page Level CSS-->
    <link rel="stylesheet" href="<?=@$page_level_css?>">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-red sidebar-mini fixed">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="#" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>CL</b>A</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>C.L Air</b> Express</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the messages -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <!-- User Image -->
                                                <img src="<?=base_url($u_info['user_profile_picture'])?>" class="img-circle" alt="User Image">
                                            </div>
                                            <!-- Message title and timestamp -->
                                            <h4>
                                                Support Team
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <!-- The message -->
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                </ul>
                                <!-- /.menu -->
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- /.messages-menu -->

                    <!-- Notifications Menu -->
                    <li class="dropdown notifications-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- Inner Menu: contains the notifications -->
                                <ul class="menu">
                                    <li><!-- start notification -->
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <!-- end notification -->
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks Menu -->
                    <li class="dropdown tasks-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- Inner menu: contains the tasks -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <!-- Task title and progress text -->
                                            <h3>
                                                Design some buttons
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <!-- The progress bar -->
                                            <div class="progress xs">
                                                <!-- Change the css width attribute to simulate progress -->
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
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
                    <!-- todo->sarath: double check User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="<?=base_url($u_info['user_profile_picture'])?>" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs"><?=$u_info['user_display_name']?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="<?=base_url($u_info['user_profile_picture'])?>" class="img-circle" alt="User Image">

                                <p>
                                    <?=$u_info['user_display_name'].' - '.$u_info['user_position']?>
                                    <small><?=$u_info['user_email']?></small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
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
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-primary btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?=base_url('authentication/authentication_c/logout')?>" class="btn btn-danger btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar" id="menu-search">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" class="form-control search" placeholder="Search Menu ...">
                    <span class="input-group-btn">
                        <button id="search-btn" class="btn btn-cycle btn-info">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu list">
                <li class="header">HOME</li>
                <li class="<?=(@$sub_menu == 'Dashboard')?'active':null?>">
                    <a href="<?=site_url('/admin/dashboard_admin_c')?>">
                        <i class="fa fa-home"></i>
                        <span class="menu-name">Dashboard</span>
                    </a>
                </li>
                <li class="header">AWB MANAGEMENT</li>
                <li class="treeview <?=(@$main_menu == 'AWB Management')?'active':null?>"> <!--required .active-->
                    <a href="javascript:;">
                        <i class="fa fa-barcode"></i>
                        <span  class="menu-name">AWB Number</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu <?=(@$main_menu == 'AWB Management')?'menu-open':null?>"> <!-- required .menu-open-->
                        <li class="<?=(@$sub_menu == 'AWB Number')?'active':null?>"> <!--required .active-->
                            <a href="<?=site_url('admin/awb_management_admin_c/list_awb_number')?>">
                                <i class="fa fa-list"></i>
                                <span>AWB Number</span>
                            </a>
                        </li>
                        <li class="<?=(@$sub_menu == 'AWB Pool')?'active':null?>">
                            <a href="<?=site_url('admin/awb_management_admin_c/list_awb_pool_number')?>">
                                <i class="fa fa-plus"></i>
                                <span>AWB Pool</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="header">LOCATION MANAGEMENT</li>
                <li class="treeview <?=(@$main_menu == 'Country')?'active':null?>">
                    <a href="javascript:;">
                        <i class="fa fa-flag"></i>
                        <span class="menu-name">Country</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu <?=(@$main_menu == 'Country')?'menu-open':null?>"> <!-- required .menu-open-->
                        <li class="<?=(@$sub_menu == 'Add Country')?'active':null?>"> <!--required .active-->
                            <a href="<?=site_url('admin/country_admin_c/form_add_country')?>">
                                <i class="fa fa-plus"></i>
                                <span>Add Country</span>
                            </a>
                        </li>
                        <li class="<?=(@$sub_menu == 'List Country')?'active':null?>">
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
                        <span class="menu-name">State/Province</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu <?=(@$main_menu == 'State/Province')?'menu-open':null?>"> <!-- required .menu-open-->
                        <li class="<?=(@$sub_menu == 'Add State/Province')?'active':null?>"> <!--required .active-->
                            <a href="<?=site_url('admin/state_province_admin_c/form_add_state_province')?>">
                                <i class="fa fa-plus"></i>
                                <span>Add State/Province</span>
                            </a>
                        </li>
                        <li class="<?=(@$sub_menu == 'List State/Province')?'active':null?>">
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
                        <span class="menu-name">City/District</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu <?=(@$main_menu == 'City/District')?'menu-open':null?>"> <!-- required .menu-open-->
                        <li class="<?=(@$sub_menu == 'Add City/District')?'active':null?>"> <!--required .active-->
                            <a href="<?=site_url('admin/city_district_admin_c/form_add_city_district')?>">
                                <i class="fa fa-plus"></i>
                                <span>Add City/District</span>
                            </a>
                        </li>
                        <li class="<?=(@$sub_menu == 'List City/District')?'active':null?>">
                            <a href="<?=site_url('admin/city_district_admin_c/list_city_district')?>">
                                <i class="fa fa-list"></i>
                                <span>List City/District</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="header">SHIPMENT MANAGEMENT</li>
                <li class="treeview <?=(@$main_menu == 'New Shipment')?'active':null?>">
                    <a href="javascript:;">
                        <i class="fa fa-inbox" aria-hidden="true"></i>
                        <span class="menu-name">New Shipment</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu <?=(@$main_menu == 'New Shipment')?'menu-open':null?>"> <!-- required .menu-open-->
                        <li class="<?=(@$sub_menu == 'Add Domestic')?'active':null?>"> <!--required .active-->
                            <a href="<?=site_url('admin/new_shipment_admin_c/form_add_domestic_shipment')?>">
                                <i class="fa ion-map"></i>
                                <span>Add Domestic</span>
                            </a>
                        </li>
                        <li class="<?=(@$sub_menu == 'Add International Shipment')?'active':null?>"> <!--required .active-->
                            <a href="<?=site_url('admin/new_shipment_admin_c/form_add_new_international_shipment')?>">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span>Add International</span>
                            </a>
                        </li>
                        <li class="<?=(@$sub_menu == 'List New Shipment')?'active':null?>">
                            <a href="#">
                                <i class="fa fa-list"></i>
                                <span>List New Shipment</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="header">PRODUCT MANAGEMENT</li>
                <li class="treeview <?=(@$main_menu == 'Product Route')?'active':null?>">
                    <a href="javascript:;">
                        <i class="fa fa-level-up" aria-hidden="true"></i>
                        <span class="menu-name">Product Route</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu <?=(@$main_menu == 'Product Route')?'menu-open':null?>"> <!-- required .menu-open-->
                        <li class="<?=(@$sub_menu == 'Add Product Route')?'active':null?>"> <!--required .active-->
                            <a href="<?=site_url('admin/product_route_admin_c/form_add_product_route')?>">
                                <i class="fa fa-plus"></i>
                                <span>Add Product Route</span>
                            </a>
                        </li>
                        <li class="<?=(@$sub_menu == 'List Product Route')?'active':null?>">
                            <a href="#">
                                <i class="fa fa-list"></i>
                                <span>List Product Route</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="treeview <?=(@$main_menu == 'Product Type')?'active':null?>">
                    <a href="javascript:;">
                        <i class="fa fa-gift" aria-hidden="true"></i>
                        <span class="menu-name">Product Type</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu <?=(@$main_menu == 'Product Type')?'menu-open':null?>"> <!-- required .menu-open-->
                        <li class="<?=(@$sub_menu == 'Add Product Type')?'active':null?>"> <!--required .active-->
                            <a href="#">
                                <i class="fa fa-plus"></i>
                                <span>Add Product Type</span>
                            </a>
                        </li>
                        <li class="<?=(@$sub_menu == 'List Product Type')?'active':null?>">
                            <a href="#">
                                <i class="fa fa-list"></i>
                                <span>List Product Type</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

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

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            Powered by KH Courier System v.1
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2017 <a href="#" id="copyright">C.L Air<small> Express</small></a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane active" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:;">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:;">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
		 immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 2.2.3 -->
<script src="<?=base_url('/resources/plugins/jQuery/jquery-3.1.1.min.js')?>" type="text/javascript"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=base_url('/resources/bootstrap/js/bootstrap.min.js')?>" type="text/javascript"></script>
<!-- DataTable-->
<script src="<?=base_url('/resources/plugins/datatable/js/jquery.dataTables.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('/resources/plugins/datatable/js/dataTables.bootstrap.min.js')?>" type="text/javascript"></script>
<!-- Select2-->
<script src="<?=base_url()?>/resources/plugins/select2/select2.full.min.js" type="text/javascript"></script>
<!-- ListJS for search menu-->
<script src="<?=base_url()?>/resources/plugins/list_js/list.min.js" type="text/javascript"></script>
<!--DatePicker-->
<script src="<?=base_url()?>/resources/plugins/bootstrap-datetimepicker/js/moment.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>/resources/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<!--iCheck-->
<script src="<?=base_url()?>/resources/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('/resources/AdminLTE/js/app.js')?>" type="text/javascript"></script>
<script src="<?=base_url('/resources/plugins/slimScroll/jquery.slimscroll.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url()?>/resources/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
<!--Global Custom JS-->
<script src="<?=base_url()?>/resources/custom/js/custom_admin.js" type="text/javascript"></script>
<!--Page Level JS-->
<script src="<?=@$page_level_js?>" type="text/javascript"></script>
</body>
</html>

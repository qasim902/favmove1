<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Favourite Move</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Agent Profile  -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('resources/css/search.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('resources/css/dropzone.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('resources/css/style.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('resources/css/editor.css');?>">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Datetimepicker -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('resources/css/rizwan.css');?>">

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">Favourite Move</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">Favourite Move</span>
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
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="user-image" alt="User Image">
                                <span class="hidden-xs">Alexander Pierce</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">

                                    <p>
                                        Alexander Pierce - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="/favmove1/logout" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Alexander Pierce</p>
                        <a href="#">
                            <i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="<?php echo site_url('/admin');?>">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-desktop"></i>
                            <span>Admin</span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="<?php echo site_url('admin/add');?>">
                                    <i class="fa fa-plus"></i> Add</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('admin/admin_list');?>">
                                    <i class="fa fa-list-ul"></i> Listing</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-desktop"></i>
                            <span>Ad</span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="<?php echo site_url('ad/add');?>">
                                    <i class="fa fa-plus"></i> Add</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('ad/index');?>">
                                    <i class="fa fa-list-ul"></i> Listing</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-desktop"></i>
                            <span>Agency</span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="<?php echo site_url('agency/add');?>">
                                    <i class="fa fa-plus"></i> Add</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('agency/index');?>">
                                    <i class="fa fa-list-ul"></i> Listing</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-desktop"></i>
                            <span>Agent</span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="<?php echo site_url('agent/add');?>">
                                    <i class="fa fa-plus"></i> Add</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('agent/index');?>">
                                    <i class="fa fa-list-ul"></i> Listing</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-desktop"></i>
                            <span>News</span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="<?php echo site_url('news/add');?>">
                                    <i class="fa fa-plus"></i> Add</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('news/index');?>">
                                    <i class="fa fa-list-ul"></i> Listing</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-desktop"></i>
                            <span>Property Positions</span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="<?php echo site_url('prop_position/add');?>">
                                    <i class="fa fa-plus"></i> Add</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('prop_position/index');?>">
                                    <i class="fa fa-list-ul"></i> Listing</a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Feature</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?php echo site_url('feature/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('feature/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul>
                        </li> -->
                    <li>
                        <a href="#">
                            <i class="fa fa-desktop"></i>
                            <span>Package</span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="<?php echo site_url('package/add');?>">
                                    <i class="fa fa-plus"></i> Add</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('package/index');?>">
                                    <i class="fa fa-list-ul"></i> Listing</a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Prop Detail</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?php echo site_url('prop_detail/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('prop_detail/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul>
                        </li> -->
                    <li>
                        <a href="#">
                            <i class="fa fa-desktop"></i>
                            <span>Property</span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="<?php echo site_url('property/add');?>">
                                    <i class="fa fa-plus"></i> Add</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('property/index');?>">
                                    <i class="fa fa-list-ul"></i> Listing</a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Uk Town</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?php echo site_url('uk_town/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('uk_town/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul>
                        </li> -->
                    <li>
                        <a href="#">
                            <i class="fa fa-desktop"></i>
                            <span>User</span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="<?php echo site_url('user/add');?>">
                                    <i class="fa fa-plus"></i> Add</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('user/index');?>">
                                    <i class="fa fa-list-ul"></i> Listing</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>


       
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="col-md-12">
                    <!-- Profile Image -->
                 <?php   
                 if(!empty($agquery)){
                 foreach($agquery as $val): ?>
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <div class="col-md-6">

                                <div class="tab-pane">

                                    <div class="invoice-col">
                                        <br>
                                        <div class="col-md-12">
                                            <div class="col-md-12">
                                                <h3 class="box-title">
                                                    <b>User Detail</b>
                                                </h3>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="box-title">
                                                    <b>User Name:</b>
                                                </span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="ag_inq">
                                                    <?php 
                                                   
                                                        echo $val['fullname'];
                                                    
                                                    
                                                    ?>
                                                </span>
                                            </div>
                                            <br>
                                            <div class="col-md-6">
                                                <span class="box-title">
                                                    <b>User Option:</b>
                                                </span>
                                            </div>
                                            <div class="col-md-6">
                                            <span class="ag_inq">
                                                    <?php 
                                                    
                                                        echo $val['useroption'];
                                                    
                                                   
                                                    ?>
                                                </span>
                                            </div>
                                            <br>
                                            <div class="col-md-6">
                                                <span class="box-title">
                                                    <b>Email:</b>
                                                </span>
                                            </div>
                                            <div class="col-md-6">
                                            <span class="ag_inq">
                                                   <?php
                                                        echo $val['email'];
                                                    
                                                    
                                                    ?>
                                                </span>
                                            </div>
                                            <br>
                                            <div class="col-md-6">
                                                <span class="box-title">
                                                    <b>Phone:</b>
                                                </span>
                                            </div>
                                            <div class="col-md-6">
                                            <span class="ag_inq">
                                                    <?php 
                                                   
                                                        echo $val['phone'];
                                                   
                                                    ?>
                                                </span>
                                            </div>
                                            <br>

                                            <div class="col-md-12">
                                                <h5 class="box-title">
                                                    <b>Description</b>
                                                </h5>
                                                <p>
                                                <span class="ag_inq">
                                                    <?php 
                                                   
                                                        echo $val['message'];
                                                    
                                                
                                                    ?>
                                                </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="clearfix"></div>
                                </div>

                            </div>

                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
                <?php 
                endforeach;
                } 
                else
                {
                    echo "<h3>No query for this admin</h3>";
                }
                ?>

            </section>
            <!-- /.content -->
        </div>
       
       
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <strong>FavouriteMove.com</strong>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">

            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">

                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->

            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->




    <!-- jQuery 2.2.3 -->
    <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>

    <!-- Agent Profile  -->
    <script src="<?php echo site_url('resources/js/masonry.pkgd.min.js');?>"></script>
    <script src="<?php echo site_url('resources/js/editor.js');?>"></script>
    <script src="<?php echo site_url('resources/js/selectbox-0.2.min.js');?>"></script>
    <script src="<?php echo site_url('resources/js/dropzone.min.js');?>"></script>
    <script src="<?php echo site_url('resources/js/zelect.js');?>"></script>
    <script src="<?php echo site_url('resources/js/neary-by-place.js');?>"></script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U&libraries=places"></script>
    <script src="<?php echo site_url('resources/js/google-map.js');?>"></script>
    <script src="<?php echo site_url('resources/js/custom.js');?>"></script>

    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
    <!-- FastClick -->
    <script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo site_url('resources/js/app.min.js');?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo site_url('resources/js/demo.js');?>"></script>
    <!-- DatePicker -->
    <script src="<?php echo site_url('resources/js/moment.js');?>"></script>
    <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
    <script src="<?php echo site_url('resources/js/global.js');?>"></script>

    <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>


</body>

</html>
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
        <link rel="stylesheet" href="<?php echo site_url('resources/css/style2.css');?>">

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
                                    <span class="hidden-xs">
                                        <?php echo $this->session->userdata('username');?>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">

                                    <p>
                                        <?php echo $this->session->userdata('username');?> - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="logout" class="btn btn-default btn-flat">Sign out</a>
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
                            <p><?php echo $this->session->userdata('username');?></p> 
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li>
                            <a href="<?php echo site_url('/admin');?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="mywall">
                                <i class="fa fa-desktop"></i> <span>Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-desktop"></i> <span>Favourite Property</span>
                            </a>
                        </li>
                        <li>
                            <a href="logout">
                                <i class="fa fa-desktop"></i> <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </section>

                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
            <div class="col-md-12">
        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">
                <div class="col-md-3">
                    <img class="profile-user-img img-responsive img-circle" src="../resources/img/user4-128x128.jpg" alt="User profile picture">

                    <h3 class="profile-username text-center"><?php echo $this->session->userdata('username'); ?></h3>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>User ID</b>
                            <a class="pull-right"><?php echo $this->session->userdata('userid'); ?></a>
                        </li>
                        <li class="list-group-item">
                            <b>User Type</b>
                            <a class="pull-right">User</a>
                        </li>
                        <li class="list-group-item">
                            <b>Email</b>
                            <a class="pull-right"><?php echo $this->session->userdata('email'); ?></a>
                        </li>
                    </ul>

                </div>
                <div class="col-md-9">

                    <div class="tab-pane">
                        <h3 class="box-title">Description</h3>
                        <!-- Post -->
                        <div class="post">

                            <p>
                                Lorem ipsum represents a long-held tradition for designers, typographers and the like. Some people hate it and argue for
                                    its demise, but others ignore the hate as they create awesome tools to help create filler
                                    text for everyone from bacon lovers to Charlie Sheen fans.
                            </p>
                            <h4 class="box-title">Town:</h4>
                            <p>
                                Lorem ipsum represents a long-held tradition for designers,
                            </p>
                            <div class="col-md-4">Empty Div</div>
                            <div class="col-md-4">Empty Div</div>
                            <div class="col-md-4">Empty Div</div>
                            <ul class="list-inline">
                                <li class="pull-right">
                                    <a href="#" class="btn btn-primary link-white text-sm">
                                        <i class="fa fa-pencil margin-r-5"></i> Edit</a>
                                </li>
                                <li class="pull-right">
                                    <a href="#" class="btn btn-danger link-white text-sm">
                                        <i class="fa fa-trash margin-r-5"></i> Delete</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.post -->

                    </div>

                </div>

                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
                     
                               
        <!-- Profile Image -->
        
    </div>
                 
                                
            </div>
        </div>
    </div>
</div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Generated By <a href="http://www.crudigniter.com/">CRUDigniter</a> 3.2</strong>
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
        <script src="<?php echo site_url('resources/js/custom2.js');?>"></script>
        <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script> 


    </body>
</html>

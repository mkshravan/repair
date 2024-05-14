<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laptop Service Center </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css'); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Datetimepicker -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css'); ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css'); ?>">


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css" />

    <style type="text/css">
        .error {
            color: #e32e24;
        }
    </style>

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="" class="logo" style="background-color:#fff;">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><img src="<?php echo site_url('resources/img/logo.png'); ?>"
                        style="width:160px; height:50px" /></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><img src="<?php echo site_url('resources/img/logo.png'); ?>"
                        style="width:160px; height:50px" /></span>
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

                                <i class="fa fa-male fa-2x text-white user-image"></i>
                                <span class="hidden-xs">
                                    <?php echo $this->session->userdata('name'); ?>
                                </span>

                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <i class="fa fa-male fa-3x text-white"></i>

                                    <p>
                                        <?php echo $this->session->userdata('name'); ?>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo site_url('admin/logout'); ?>"
                                            class="btn btn-default btn-flat">Sign out</a>
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
                        <!-- <img src="" class="img-circle" alt="User Image"> -->
                        <i class="fa fa-male fa-3x text-primary"></i>

                    </div>
                    <div class="pull-left info">
                        <p>
                            <?php echo $this->session->userdata('name'); ?>
                        </p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li>
                        <a href="<?php echo site_url('admin/dashboard'); ?>">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-file-archive-o"></i> <span>Complaints</span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo site_url('admin/complaints/index'); ?>"><i class="fa fa-list-ul"></i>
                                    Listing</a>
                            </li>
                            <li class="active">
                                <a href="<?php echo site_url('admin/complaints/add'); ?>"><i class="fa fa-plus"></i>
                                    Add</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('admin/complaints/closed'); ?>"><i class="fa fa-close"></i>
                                    Completed</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-file-archive-o"></i> <span>Quotation</span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo site_url('admin/quotation/index'); ?>"><i class="fa fa-list-ul"></i>
                                    Listing</a>
                            </li>
                            <li class="active">
                                <a href="<?php echo site_url('admin/quotation/add'); ?>"><i class="fa fa-plus"></i>
                                    Add</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i> <span>Quotation Approval</span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo site_url('admin/quotation/quotationApprovalList'); ?>"><i
                                        class="fa fa-list-ul"></i> Listing</a>
                            </li>
                            <li class="active">
                                <a href="<?php echo site_url('admin/quotation/quotationApprovalAdd'); ?>"><i
                                        class="fa fa-plus"></i> Add</a>
                            </li>

                        </ul>
                    </li>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-file"></i> <span>Tax Invoice</span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo site_url('admin/invoice/index'); ?>"><i class="fa fa-list-ul"></i>
                                    Listing</a>
                            </li>
                            <li class="active">
                                <a href="<?php echo site_url('admin/invoice/add'); ?>"><i class="fa fa-plus"></i> Add</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-list"></i> <span>Report</span>
                        </a>
                        <ul class="treeview-menu">
                            <!-- <li class="active">
                                    <a href="<?php //echo site_url('report/quotation'); ?>"><i class="fa fa-list-ul"></i> Quotation</a>
                                </li> -->
                            <li>
                                <a href="<?php echo site_url('admin/report/date_to_date_quotation'); ?>"><i
                                        class="fa fa-list-ul"></i> Date to Date Quotation</a>
                            </li>
                            <!-- <li>
                                    <a href="<?php //echo site_url('report/tax_invoice'); ?>"><i class="fa fa-list-ul"></i> Tax Invoice</a>
                                </li> -->
                            <li>
                                <a href="<?php echo site_url('admin/report/date_to_date_tax_invoice'); ?>"><i
                                        class="fa fa-list-ul"></i> Date to Date Tax Invoice</a>
                            </li>
                            <!-- <li>
                                    <a href="<?php //echo site_url('report/tax_invoice_due'); ?>"><i class="fa fa-list-ul"></i> Tax Invoice Due</a>
                                </li> -->
                            <!-- <li>
                                    <a href="<?php //echo site_url('report/total_received_amount'); ?>"><i class="fa fa-list-ul"></i> Total Received Amount</a>
                                </li> -->
                            <!--  <li>
                                    <a href="<?php //echo site_url('report/date_to_date_received_amount'); ?>"><i class="fa fa-list-ul"></i> Date to Date Received Amount</a>
                                </li> -->
                            <li>
                                <a href="<?php echo site_url('admin/report/cancel_quotation'); ?>"><i
                                        class="fa fa-list-ul"></i> Cancel Quotation</a>
                            </li>
                        </ul>
                    </li>
                    <?php
                    if ($this->session->userdata('roles') == ADMIN) { ?>
                        <li>
                            <a href="<?php echo site_url('admin/user/index'); ?>">
                                <i class="fa fa-user"></i> <span>Users</span>
                            </a>
                        </li>
                    <?php } ?>

                    <?php
                    if ($this->session->userdata('roles') == ADMIN) { ?>
                        <li>
                            <a href="<?php echo site_url('admin/inventory/index'); ?>">
                                <i class="fa fa-user"></i> <span>Inventory</span>
                            </a>
                        </li>
                    <?php } ?>
				
				 <?php
                    if ($this->session->userdata('roles') == ADMIN) { ?>
				<li>
                        <a href="#">
                            <i class="fa fa-file-archive-o"></i> <span>Accounts</span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo site_url('admin/accounts/index'); ?>"><i class="fa fa-list-ul"></i>
                                    Payment List</a>
                            </li>
							<li>
                                <a href="<?php echo site_url('admin/accounts/closed'); ?>"><i class="fa fa-close"></i>
                                    Expense List</a>
                            </li>
							<li>
                                <a href="<?php echo site_url('admin/accounts/closed'); ?>"><i class="fa fa-close"></i>
                                    Balance Sheet</a>
                            </li>
							<li>
                                <a href="<?php echo site_url('admin/accounts/closed'); ?>"><i class="fa fa-close"></i>
                                    Trial Balance</a>
                            </li>
							<li>
                                <a href="<?php echo site_url('admin/accounts/closed'); ?>"><i class="fa fa-close"></i>
                                    Cash Flow</a>
                            </li>

                        </ul>
                    </li>
				<?php } ?>

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <?php
                if (isset($_view) && $_view)
                    $this->load->view($_view);
                ?>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Developed By <a href="https://www.webdadz.com/">Webdadz Technology</a></strong>
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
    <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js'); ?>"></script>

    <!--  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->

    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo site_url('resources/js/bootstrap.min.js'); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo site_url('resources/js/fastclick.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo site_url('resources/js/app.min.js'); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo site_url('resources/js/demo.js'); ?>"></script>
    <!-- DatePicker -->
    <script src="<?php echo site_url('resources/js/moment.js'); ?>"></script>
    <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js'); ?>"></script>
    <script src="<?php echo site_url('resources/js/global.js'); ?>"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo site_url('resources/js/loadingoverlay.min.js'); ?>"></script>
    <!-- <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>  -->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>





    <!-- https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js -->

    <script>
        $(document).ready(function () {
            $('.complaints').DataTable({
                dom: 'Bfrtip',
                buttons: [

                    {
                        extend: 'excel',
                        title: 'All Complaints',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5]
                        }
                    },
                    {
                        extend: 'pdf',
                        title: 'All Complaints',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5]
                        }
                    }
                ]

            });
            $('.quotation').DataTable({
                dom: 'Bfrtip',
                buttons: [

                    {
                        extend: 'excel',
                        title: 'All Quotations',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5]
                        }
                    },
                    {
                        extend: 'pdf',
                        title: 'All Quotations',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5]
                        }
                    }
                ]

            });
            $('.quotationApproval').DataTable({
                dom: 'Bfrtip',
                buttons: [

                    {
                        extend: 'excel',
                        title: 'All Approved Quotations',
                        exportOptions: {
                            columns: [1, 2, 3, 4, 5, 6, 7]
                        }
                    },
                    {
                        extend: 'pdf',
                        title: 'All Approved Quotations',
                        exportOptions: {
                            columns: [1, 2, 3, 4, 5, 6, 7]
                        }
                    }
                ]
            });
            $('.invoice').DataTable({
                dom: 'Bfrtip',
                buttons: [

                    {
                        extend: 'excel',
                        title: 'All Invoice',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6]
                        }
                    },
                    {
                        extend: 'pdf',
                        title: 'All Invoice',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6]
                        }
                    }
                ]
            });
            $('.userTable').DataTable({
                dom: 'Bfrtip',
                buttons: [

                    {
                        extend: 'excel',
                        title: 'User List',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4]
                        }
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: [0, 1, 2, 3]
                        }
                    }
                ]
            });
            $('.datetodatequotation').DataTable({
                dom: 'Bfrtip',
                buttons: [

                    {
                        extend: 'excel',
                        title: 'User List',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6]
                        }
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6]
                        }
                    }
                ]
            });
            $('.datetodateinvoice').DataTable({
                dom: 'Bfrtip',
                buttons: [

                    {
                        extend: 'excel',
                        title: 'User List',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5]
                        }
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5]
                        }
                    }
                ]
            });

            $('.cancelquote').DataTable({
                dom: 'Bfrtip',
                buttons: [

                    {
                        extend: 'excel',
                        title: 'User List',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7]
                        }
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7]
                        }
                    }
                ]
            });

        });
    </script>
</body>

</html>
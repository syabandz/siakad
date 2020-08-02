<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->
    <!-- start: HEAD -->
    <head>
        <title>Siakad SMAIT Thariq Bin Ziyad</title>
        <!-- start: META -->
        <meta charset="utf-8" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- end: META -->
        <!-- start: MAIN CSS -->
        <link rel="shortcut icon" href="<?php echo base_url()?>uploads/siakad1.png">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main-responsive.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/skins/all.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/theme_light.css" type="text/css" id="skin_color">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/print.css" type="text/css" media="print"/>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/snapkit-validation/snapkit-validation.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/select2/dist/css/select2.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/Flot/examples/shared/jquery-ui/jquery-ui.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/datatables.net-bs/css/dataTables.bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/sweetalert.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.css">
        <!--[if IE 7]>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
        <![endif]-->
        <!-- end: MAIN CSS -->
        <style type="text/css">
        .ui-autocomplete {
            max-height: 300px;
            max-width: 635px;
            overflow-y: auto;
            overflow-x: hidden;
            padding-right: 20px;
        }
        .fc-time {
            display: none;
        }
    </style>
    </head>
    <!-- end: HEAD -->
    <!-- start: BODY -->
    <body>
        <!-- start: HEADER -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <!-- start: TOP NAVIGATION CONTAINER -->
            <div class="container">
                <div class="navbar-header">
                    <!-- start: RESPONSIVE MENU TOGGLER -->
                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="clip-list-2"></span>
                    </button>
                    <!-- end: RESPONSIVE MENU TOGGLER -->
                    <!-- start: LOGO -->
                    <a class="navbar-brand" href="<?php echo base_url()?>biodata" style="height: 50px;">
                        Siakad SMAIT Thariq Bin Ziyad
                    </a>
                    <!-- end: LOGO -->
                </div>
                <div class="navbar-tools">
                    <!-- start: TOP NAVIGATION MENU -->
                    <ul class="nav navbar-right">
                        <!-- start: USER DROPDOWN -->
                        <li class="dropdown current-user">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
                                <span class="username"><?php echo $this->session->userdata('nama_lengkap') ?></span>
                                <i class="clip-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo base_url();?>auth/logout">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i> &nbsp;Log Out
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end: USER DROPDOWN -->
                    </ul>
                    <!-- end: TOP NAVIGATION MENU -->
                </div>
            </div>
            <!-- end: TOP NAVIGATION CONTAINER -->
        </div>
        <!-- end: HEADER -->
        <!-- start: MAIN CONTAINER -->
        <div class="main-container">
            <div class="navbar-content">
                <!-- start: SIDEBAR -->
                <div class="main-navigation navbar-collapse collapse">
                    <!-- start: MAIN MENU TOGGLER BUTTON -->
                    <ul class="main-navigation-menu">
                        <a href="<?php echo base_url();?>biodata">
                            <img src="<?php echo base_url();?>uploads/siakad1" width='120px' style="margin-left: 50px; margin-top: 20px; margin-bottom: 20px;">
                        </a>
                     </ul>
                    <!-- end: MAIN MENU TOGGLER BUTTON -->
                    <!-- start: MAIN NAVIGATION MENU -->
                    <ul class="main-navigation-menu">
                        <?php
                        $id_level_user = $this->session->userdata('id_level_user');
                        $sql_menu = "SELECT * FROM tabel_menu WHERE id in(select id_menu from tbl_user_rule where id_level_user = $id_level_user order by id_menu desc) and is_main_menu=0";
                        $main_menu = $this->db->query($sql_menu)->result();
                        foreach ($main_menu as $main) {
                            // chek apakah ada submenu ?
                            $submenu = $this->db->get_where('tabel_menu', array('is_main_menu' => $main->id));
                            if ($submenu->num_rows() > 0) {
                                // tampilkan submenu disini
                                echo "<li>
                                    <a href='javascript:void(0)'>
                                    <i class='" . $main->icon . "'></i>
                                    <span class='title'> " . strtoupper($main->nama_menu) . " </span>
                                    <span class='selected'></span>
                                    </a>
                                    <ul class='sub-menu'>";
                                foreach ($submenu->result() as $sub) {
                                    echo "<li>" . anchor($sub->link, "<i class='" . $sub->icon . "'></i> " . strtoupper($sub->nama_menu)) . "</li>
                                     ";
                                    }

                                echo "</ul>
                                     </li>";
                            } else {
                                // tampilkan main menu
                                echo "<li>" . anchor($main->link, "<i class='" . $main->icon . "'></i>" . strtoupper($main->nama_menu)) . "</li>";
                            }
                        }
                        ?>
                     </ul>
                    <!-- end: MAIN NAVIGATION MENU -->
                </div>
                <!-- end: SIDEBAR -->
            </div>
            <!-- start: PAGE -->
            <div class="main-content">
                <!-- start: MAIN CONTAINER -->
                <div class="container">
                    <!-- start: PAGE CONTENT -->
                    <?php echo $contents;?>
                    <!-- end: PAGE CONTENT -->
                </div>
                <!-- end: MAIN CONTAINER -->
                <!-- start: FOOTER -->
                <div class="footer clearfix">
                    <div class="footer-inner">
                        2020 &copy; created by windhiarmono
                    </div>
                    <div class="footer-items">
                        <span class="go-top"><i class="clip-chevron-up"></i></span>
                    </div>
                </div>
                <!-- end: FOOTER -->
            </div>
            <!-- end: PAGE -->
        </div>

        <!-- start: MAIN JAVASCRIPTS -->
        <!--[if lt IE 9]>
        <script src="<?php echo base_url();?>assets/plugins/respond.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/excanvas.min.js"></script>
        <![endif]-->
        <!--[if gte IE 9]><!-->
        
        <!--<![endif]-->
        <script src="<?php echo base_url();?>assets/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <script src="<?php echo base_url();?>assets/moment/moment.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/sweetalert.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/sweetalert-dev.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/blockUI/jquery.blockUI.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/iCheck/jquery.icheck.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/less/less-1.5.0.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/jquery-cookie/jquery.cookie.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
        <script src="<?php echo base_url();?>assets/js/main.js"></script>
        <!-- end: MAIN JAVASCRIPTS -->
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script src="<?php echo base_url();?>assets/plugins/flot/jquery.flot.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/flot/jquery.flot.pie.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/jquery.sparkline/jquery.sparkline.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.js"></script>
        <script src="<?php echo base_url();?>assets/js/index.js"></script>
        <script src="<?php echo base_url();?>assets/snapkit-validation/snapkit-validation.min.js"></script>
        <script src="<?php echo base_url();?>assets/select2/dist/js/select2.full.min.js"></script>
        <script src="<?php echo base_url();?>assets/Scripts/jquery-ui-1.9.2.custom.min.js"></script>
        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script type="text/javascript">
            jQuery(document).ready(function() {
                Main.init();
                Index.init();
            });
            $(function () {
                // make a select2
                $('.select2').select2()

                //Date picker
                $('.datepicker').datepicker({
                    autoclose: true,
                    dateFormat: "dd MM yy",
                });
            });
        </script>
    </body>
    <!-- end: BODY -->
</html>
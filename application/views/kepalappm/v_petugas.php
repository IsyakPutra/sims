<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PPM | YOGYAKARTA</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="<?php echo base_url() ?>template/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">-->
        <link rel="stylesheet" href="<?php echo base_url() ?>template/font-awesome-4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <!--<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
        <link rel="stylesheet" href="<?php echo base_url() ?>template/ionicons-2.0.1/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/datatables/dataTables.bootstrap.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url() ?>template/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo base_url() ?>template/dist/css/skins/_all-skins.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- datepicker -->

        <link rel="stylesheet" href="<?= base_url('plugins/datetimepicker/bootstrap-datepicker.min.css')?>" media='screen'>


        <!-- jQuery 2.1.4 -->
        <script src="<?php echo base_url() ?>template/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <?php if ($this->uri->segment(1) == 'kalender'): ?><!-- assets uri kalender -->
            <link rel="stylesheet" href="<?= base_url('plugins/fullcalendar/lib/cupertino/jquery-ui.min.css')?>">
            <link rel="stylesheet" href="<?= base_url('plugins/fullcalendar/fullcalendar.min.css')?>">
            <link rel="stylesheet" href="<?= base_url('plugins/fullcalendar/fullcalendar.print.min.css')?>" media='print'>
            <link rel="stylesheet" href="<?= base_url('plugins/datetimepicker/bootstrap-datetimepicker.min.css')?>" media='screen'>
            <script src="<?= base_url('plugins/datepicker/bootstrap-datepicker.js')?>"></script>
            <script src="<?= base_url('plugins/fullcalendar/lib/moment.min.js')?>"></script>
            <script src="<?= base_url('plugins/fullcalendar/fullcalendar.min.js')?>"></script>
            <script src="<?= base_url('plugins/fullcalendar/locale/id.js')?>"></script>
            <script src="<?= base_url('plugins/datetimepicker/bootstrap-datetimepicker.min.js')?>"></script>
            <script src="<?= base_url('plugins/datetimepicker/bootstrap-datetimepicker.id.js')?>"></script>
            <script src="<?= base_url('assets/js/custom.js')?>"></script>
            
        <!-- /assets uri kalender --><?php endif ?> 
        <?php if ($this->uri->segment(1) == 'grafik'): ?><!-- assets uri grafik -->
            <script src="<?= base_url('plugins/highcharts/highcharts.js')?>"></script>
        <!-- /assets uri grafik --><?php endif ?>   
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>PPM</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>PPM JOGJA</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
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
                            <li class="dropdown use-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-right: 30px;">
                                    
                                    <span class="hidden-xs">kepala &nbsp <i class="fa fa-power-off" aria-hidden="true"></i></span>
                                </a>
                                <ul class="dropdown-menu">
                                   
                                                                        
                                        <div class="pull-right" style="padding-right: 15px;">
                                            <?php
                                            echo anchor('login/logout','KELUAR',array('class'=>'btn btn-danger btn-sm'));
                                            ?>
                                            
                                        </div>
                                    
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
               
                    <ul class="sidebar-menu">
                        <li class="header"><center>KELOLA DATA SANTRI</center></li> 

            <!-- <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears"></i> <span>EDIT KATEGORI SANTRI</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('kepalappm/jurusan') ?>"><i class="fa fa-graduation-cap"></i>JURUSAN/PROGRAM STUDI</a></li>
                    <li><a href="<?php echo site_url('kepalappm/fakultas') ?>"><i class="fa fa-graduation-cap"></i>FAKULTAS</a></li>
                    <li><a href="<?php echo site_url('kepalappm/universitas') ?>"><i class="fa fa-graduation-cap"></i> UNIVERSITAS</a></li>
                    <li><a href="<?php echo site_url('kepalappm/kelas') ?>"><i class="fa fa-graduation-cap"></i>KELAS</a></li>
                </ul>
            </li> -->
            <li>
                <a href="<?php echo site_url('kepalappm/Siswa') ?>">
                    <i class="fa fa-users"></i> <span>DAFTAR SANTRI</span>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('kepalappm/guru') ?>">
                    <i class="fa fa-users"></i> <span>DAFTAR GURU</span>
                </a>
            </li>





                        <!-- <?php
                        $menu = $this->db->get_where('menu', array('is_parent' => 0,'is_active'=>1));
                        foreach ($menu->result() as $m) {
                            // chek ada sub menu
                            $submenu = $this->db->get_where('menu',array('is_parent'=>$m->id,'is_active'=>1));
                            if($submenu->num_rows()>0){
                                // tampilkan submenu
                                echo "<li class='treeview'>
                                    ".anchor('#',  "<i class='$m->icon'></i>".strtoupper($m->name).' <i class="fa fa-angle-left pull-right"></i>')."
                                        <ul class='treeview-menu'>";
                                foreach ($submenu->result() as $s){
                                     echo "<li>" . anchor($s->link, "<i class='$s->icon'></i> <span>" . strtoupper($s->name)) . "</span></li>";
                                }
                                   echo"</ul>
                                    </li>";
                            }else{
                                echo "<li>" . anchor($m->link, "<i class='$m->icon'></i> <span>" . strtoupper($m->name)) . "</span></li>";
                            }
                            
                        }
                        ?> -->



                        <li class="header"><center>AKADEMIK SANTRI</center></li>

        <!-- <li>
            <a href="<?php echo site_url('kepalappm/ujian') ?>">
                <i class="fa fa-edit"></i> <span>MUNAQOSYAH</span>
            </a>
        </li> -->

        <li>
            <a href="<?= base_url('grafik') ?>">
                <i class="fa fa-area-chart"></i> <span>GRAFIK MUNAQOSYAH</span>
            </a>
        </li>
        <li class="header"><center>KALENDER SANTRI</center></li>
        <li>
            <a href="<?= base_url('kepalappm/kalender') ?>">
                <i class="fa fa-calendar"></i> <span>AGENDA SANTRI</span>
            </a>
        </li>
        
    
        </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  
                </section>
                


                <?php
                echo $contents;
                ?> 



            </div><!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                </div>
                <strong>Copyright &copy; 2017 PPM YOGYAKARTA
            </footer>

            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div><!-- ./wrapper -->

        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo base_url() ?>template/bootstrap/js/bootstrap.min.js"></script>
        <!-- DataTables -->
        <script src="<?php echo base_url() ?>template/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url() ?>template/plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="<?php echo base_url() ?>template/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url() ?>template/plugins/fastclick/fastclick.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url() ?>template/dist/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url() ?>template/dist/js/demo.js"></script>
        <!-- page script -->
        <script>
            $(function () {
                $("#example1").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "scrollX": true

                });
            });
        </script>
        <!-- datepicker -->
        <script src="<?= base_url('plugins/datetimepicker/bootstrap-datepicker.min.js')?>"></script>
        <script src="<?= base_url('plugins/datetimepicker/bootstrap-datepicker.id.min.js')?>"></script>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PPM JOGJA</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url() ?>template/font-awesome-4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo base_url() ?>template/ionicons-2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/plugins/iCheck/square/blue.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <?php echo form_open('login/proseslogin')?>
    <body class="hold-transition login-page" style="background-image: url('template/dist/img/ppm3.jpg'); background-repeat: no-repeat;">
        <div class="login-box" style="background:#fff; opacity:0.9;">
        
            
            <div class="login-box-body">

            <div class="login-logo">
                <a href="<?php echo base_url(); ?>"><b>SIMS</b> PPM JOGJA</a>
            </div><!-- /.login-logo -->
                <!-- <p class="login-box-msg"><?php echo $message; ?></p>
                <?php echo form_open('auth/login'); ?> -->
                <div class="form-group has-feedback">
                    <!-- <?php echo form_input($identity); ?> -->
                    <input type="email" name="email" value="" id="identity" class="form-control" placeholder="Alamat Email">

                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                   <!-- <?php echo form_input($password); ?> // Ini untuk otomatis --> 
                    <input type="password" name="pass" value="" id="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <!-- <div class="form-group has-feedback">
                    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?> INGAT SAYA
                </div> -->
                
                <div class="row">

                    <div class="col-xs-12">
                        <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-sign-in"></i> MASUK</button>
                    </div><!-- /.col -->

                </div>
                <center><h4>Sistem Informasi Manajemen Santri<br><b>PPM Yogyakarta</b></h4></center>
                </form>



            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.4 -->
        <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo base_url().'assets/'?>bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
        <?php echo form_close()?>
    </body>
</html>

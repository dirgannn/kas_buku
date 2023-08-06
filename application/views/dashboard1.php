<html style="height: auto; min-height: 100%;">

<head>
    <title>
        Dashboard | Kas Buku </title>
    <link href="https://pipapip.web.id/kas/assets/upload/images/" rel="shortcut icon" type="image/x-icon">
    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> <!-- css -->
    <link href="https://pipapip.web.id/kas/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://pipapip.web.id/kas/assets/vendor/iCheck/minimal/blue.css" rel="stylesheet">
    <link href="https://pipapip.web.id/kas/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://pipapip.web.id/kas/assets/vendor/Ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="https://pipapip.web.id/kas/assets/vendor/AdminLTE-2.4.3/css/AdminLTE.min.css" rel="stylesheet">
    <link href="https://pipapip.web.id/kas/assets/vendor/AdminLTE-2.4.3/css/skins/_all-skins.min.css" rel="stylesheet">
    <!-- Bootstrap time Picker -->
    <link href="<?= base_url('assets/nicee/') ?>assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link href="https://pipapip.web.id/kas/assets/vendor/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pipapip.web.id/kas/assets/vendor/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <script src="https://pipapip.web.id/kas/assets/vendor/chart/Chart.js" type="text/javascript"></script>
    <style type="text/css">
        /* Chart.js */
        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }
    </style>
    <!-- <script src="https://cdn.rawgit.com/plentz/jquery-maskmoney/master/dist/jquery.maskMoney.min.js" type="text/javascript"></script> -->
    <style type="text/css">
        .ngepasin {
            background-color: #ecf0f5;
            margin-bottom: 50px;
        }

        .skin-purple-light .main-header .navbar {
            background-color: #000;
        }

        .example-modal .modal {
            position: relative;
            top: auto;
            bottom: auto;
            right: auto;
            left: auto;
            display: block;
            z-index: 1;
        }

        .example-modal .modal {
            background: transparent !important;
        }
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- jQuery 2.2.3 -->
    <script src="https://pipapip.web.id/kas/assets/vendor/jquery/jquery.min.js"></script>
</head>

<body class="layout-top-nav skin-purple-light" style="height: auto; min-height: 100%;">
    <div class="container">




    </div>
    <div class="wrapper" style="height: auto; min-height: 100%;">
        <!-- header -->
        <header class="main-header">
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="" class="navbar-brand"><b>Kas
                            </b>Buku</a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="">
                                    <span>Dashboard</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav ">
                            <!-- User Account Menu -->
                            <li class="pull-right">
                                <i class="bi bi-box-arrow-right"></i>
                                <span style="color: white; margin-top: 7px;" class="btn mt-5" data-toggle="modal" data-target="#modalSubscriptionForm">Login</span>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </header> <!-- content -->
        <div id="myalert">
            <?= $this->session->flashdata('alert', true) ?>

        </div>
        <div class="content-wrapper" style="min-height: 714.2px;">
            <div class="container" style="width : 95%;">
                <div id="myalert" style="display: none;">
                </div>
                <div class="col-xs-12">

                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-solid">
                            <div class="box-body">
                                <div class="col-xs-12">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <td colspan="3" style="text-align: center; font-size: 18px;">TOTAL SEMUA
                                                    PEMASUKAN
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;">HARI INI</td>
                                                <td style="text-align: center;">BULAN INI</td>
                                                <td style="text-align: center;">TOTAL PEMASUKAN</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;">
                                                    <?php
                                                    $total_pemasukan_hari_ini = $this->Transaksi_model->get_total_pemasukan_hari_ini();
                                                    echo !empty($total_pemasukan_hari_ini) ? 'Rp ' . number_format($total_pemasukan_hari_ini, 0, ',', '.') : 'Rp 0';
                                                    ?>
                                                </td>
                                                <td style="text-align: center;">
                                                    <?php
                                                    $total_pemasukan_bulan_ini = $this->Transaksi_model->get_total_pemasukan_bulan_ini();
                                                    echo !empty($total_pemasukan_bulan_ini) ? 'Rp ' . number_format($total_pemasukan_bulan_ini, 0, ',', '.') : 'Rp 0';
                                                    ?>
                                                </td>
                                                <td style="text-align: center;">
                                                    <?php
                                                    $total_pemasukan_keseluruhan = $this->Transaksi_model->get_total_pemasukan_keseluruhan();
                                                    echo !empty($total_pemasukan_keseluruhan) ? 'Rp ' . number_format($total_pemasukan_keseluruhan, 0, ',', '.') : 'Rp 0';
                                                    ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-xs-12">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <td colspan="4" style="text-align: center; font-size: 18px;">TOTAL SEMUA
                                                    PENGELUARAN
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;">HARI INI</td>
                                                <td style="text-align: center;">BULAN INI</td>
                                                <td style="text-align: center;">TOTAL PENGELUARAN</td>
                                                <td style="text-align: center;">SALDO AKHIR</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;">
                                                    <?php
                                                    $total_pengeluaran_hari_ini = $this->Transaksi_model->get_total_pengeluaran_hari_ini();
                                                    echo !empty($total_pengeluaran_hari_ini) ? 'Rp ' . number_format($total_pengeluaran_hari_ini, 0, ',', '.') : 'Rp 0';
                                                    ?>
                                                </td>
                                                <td style="text-align: center;">
                                                    <?php
                                                    $total_pengeluaran_bulan_ini = $this->Transaksi_model->get_total_pengeluaran_bulan_ini();
                                                    echo !empty($total_pengeluaran_bulan_ini) ? 'Rp ' . number_format($total_pengeluaran_bulan_ini, 0, ',', '.') : 'Rp 0';
                                                    ?>
                                                </td>
                                                <td style="text-align: center;">
                                                    <?php
                                                    $total_pengeluaran_keseluruhan = $this->Transaksi_model->get_total_pengeluaran_keseluruhan();
                                                    echo !empty($total_pengeluaran_keseluruhan) ? 'Rp ' . number_format($total_pengeluaran_keseluruhan, 0, ',', '.') : 'Rp 0';
                                                    ?>
                                                </td>
                                                <td style="text-align: center;">
                                                    <?php
                                                    $total_keseluruhan = $this->Transaksi_model->get_total_keseluruhan();
                                                    echo !empty($total_keseluruhan) ? 'Rp ' . number_format($total_keseluruhan, 0, ',', '.') : 'Rp 0';
                                                    ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <form action="<?= base_url('auth/login') ?>" method="post">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center bg-black">
                            <h4 class="modal-title w-100 font-weight-bold">Login</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <div class="md-form mb-5">
                                <label data-error="wrong" data-success="right" for="form3">Username</label>
                                <input type="text" id="form3" name="username" class="form-control validate" required>
                            </div>

                            <div class="md-form mb-4">
                                <label data-error="wrong" data-success="right" for="form2">Password</label>
                                <input type="password" name="password" id="form2" class="form-control validate" required>
                            </div>

                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="submit" class="btn btn-indigo">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="text-center">
            <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="">Launch
                Modal Subscription Form</a>
        </div>
        <!-- footer -->
        <footer class="main-footer">
            <div class="container" style="text-align : center;">
                <strong>Copyright © Karang Taruna Suruh Kayuapak </strong> All rights
                reserved.
            </div>
            <!-- /.container -->
        </footer>
    </div>
    <!-- js -->
    <!-- JavaScript -->
    <script src="https://pipapip.web.id/kas/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://pipapip.web.id/kas/assets/vendor/iCheck/icheck.min.js"></script>
    <script src="https://pipapip.web.id/kas/assets/vendor/AdminLTE-2.4.3/js/adminlte.min.js"></script>
    <script src="https://pipapip.web.id/kas/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="https://pipapip.web.id/kas/assets/vendor/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="https://pipapip.web.id/kas/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS -->
    <script src="https://pipapip.web.id/kas/assets/vendor/chart.js/Chart.js"></script>
    <script>
        $(function() {
            $('#example1').DataTable()
            $('#example11').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': true,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
            $('#example3').DataTable({
                'paging': false,
                'lengthChange': false,
                'searching': false,
                'ordering': false,
                'info': false,
                'autoWidth': false
            })
        })
    </script>
    <script>
        $('#myalert').delay('slow').slideDown('slow').delay(10000).slideUp(600);
    </script>
    <?php include(APPPATH . 'views/layout/_js.php'); ?>
    <?php if ($this->session->flashdata('pwsalah')) : ?>
        <script type="text/javascript">
            alert('<?php echo $this->session->flashdata('pwsalah'); ?>');
        </script>
    <?php endif; ?>
</body>

</html>
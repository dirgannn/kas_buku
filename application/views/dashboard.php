<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php require_once('layout/_css.php'); ?>

</head>

<body>
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
        <?php require_once('layout/_navbar.php'); ?>
        <?php require_once('layout/_sidebar.php'); ?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <center>
                    <div class="container-fluid pt-4 px-4">
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
                        <?php if ($this->session->flashdata('adminn')) : ?>
                            <script type="text/javascript">
                                alert('<?php echo $this->session->flashdata('adminn'); ?>');
                            </script>
                        <?php endif; ?>
                        <?php if ($this->session->flashdata('success')) : ?>
                            <script type="text/javascript">
                                alert('<?php echo $this->session->flashdata('success'); ?>');
                            </script>
                        <?php endif; ?>
                    </div>
                </center>
            </div>
        </div>
    </div>


    </div>
    <script src="<?= base_url('assets/nicee/') ?>assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url('assets/nicee/') ?>assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url('assets/nicee/') ?>assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url('assets/nicee/') ?>dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url('assets/nicee/') ?>dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url('assets/nicee/') ?>dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="<?= base_url('assets/nicee/') ?>assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="<?= base_url('assets/nicee/') ?>assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js">
    </script>
    <script src="<?= base_url('assets/nicee/') ?>dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>
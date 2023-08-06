<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include(APPPATH . 'views/layout/_css.php'); ?>

</head>

<body>

    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
        data-boxed-layout="full">
        <?php include(APPPATH . 'views/layout/_navbar.php'); ?>
        <?php include(APPPATH . 'views/layout/_sidebar.php'); ?>

        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-content-end">
                    <div class="col-5 ">
                        <h4 class="page-title">Transaksi saya</h4>
                    </div>

                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">My transaction</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- view_file.php -->

            <button type="button" id="bt55" onclick="generatePDF()" class="btn btn-danger text-light"> <i
                    class="mdi mdi-printer"></i>
                Cetak
                PDF</button>



            <div class="content">
                <div class="container-fluid pt-4 px-4">
                    <div class="box-body">
                        <div class="col-xs-12">
                            <?php
                            if ($this->session->flashdata('edit_success')) {
                                echo $this->session->flashdata('edit_success') . '</div>';
                            }
                            ?>
                            <table class="table table-striped mb-0">
                                <thead style="background-color: #002d72;">
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Jenis Transaksi</th>
                                        <th>Tanggal</th>
                                        <th>Jumlah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($pemasukan as $row) : ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $username['username']; ?></td>
                                        <td><?php echo $row['jenis_transaksi']; ?></td>
                                        <td><?php echo $row['tanggal']; ?></td>
                                        <td>Rp <?php echo number_format($row['jumlah'], 0, ',', '.'); ?></td>

                                        <td><button type="button" class="btn btn-success m-2"><a
                                                    href="<?php echo site_url('pemasukan/edit/' . $row['id']) ?>"
                                                    class="text-light">Edit</a></button>
                                            <button type="button" class="btn btn-danger m-2"><a
                                                    href="<?php echo site_url('transaksi/transaksi_delete/' . $row['id']); ?>"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data?')"
                                                    class="text-light">Hapus</a></button>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
    #bt55 {
        margin-top: 10px;
        position: relative;
        left: 1100px;
    }
    </style>
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
    <!-- Load jQuery untuk memanggil fungsi generatePDF() -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- JavaScript untuk mengakses URL PDF dan mengaktifkan fungsi generatePDF() -->
    <script>
    function generatePDF() {
        // Redirect ke URL yang akan menghasilkan PDF
        window.location.href = '<?= base_url('pdfcontroller/generatepdf') ?>';
    }
    </script>
    <?php include(APPPATH . 'views/layout/_js.php'); ?>

</body>

</html>
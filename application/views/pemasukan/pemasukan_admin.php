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
                        <h4 class="page-title">Pemasukan</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Pemasukan</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn m-1 btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                data-bs-whatever="@fat">Tambah Pemasukan</button>
            <div class="modal fade mt-0" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pemasukan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo site_url('pemasukan/add_pemasukan_admin') ?>" method="post">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" id="recipient-name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Jumlah</label>
                                    <input type="text" name="jumlah" class="form-control" id="recipient-name" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!--  -->

            <div class="content">
                <div class="container-fluid pt-4 px-4">
                    <div class="box-body">
                        <?php
                        if ($this->session->flashdata('edit_success')) {
                            echo $this->session->flashdata('edit_success') . '</div>';
                        }
                        ?>
                        <?php
                        if ($this->session->flashdata('success_pemasukan')) {
                            echo $this->session->flashdata('success_pemasukan') . '</div>';
                        }
                        ?>
                        <div class="col-xs-12">
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
                                    <?php foreach ($transaksi as $row) : ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $row['username']; ?></td>
                                        <td><?php echo $row['jenis_transaksi']; ?></td>
                                        <td><?php echo $row['tanggal']; ?></td>
                                        <td>Rp <?php echo number_format($row['jumlah'], 0, ',', '.'); ?></td>

                                        <td> <button type="button" class="btn btn-success m-2"><a
                                                    href="<?php echo site_url('pemasukan/edit1/' . $row['id']) ?>"
                                                    class="text-light">Edit</a></button>

                                            <button type="button" class="btn btn-danger m-2"><a
                                                    href="<?php echo site_url('pemasukan/pemasukan_admin_delete/' . $row['id']); ?>"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data?')"
                                                    class="text-light">Hapus</a></button>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php if ($this->session->flashdata('adminn')) : ?>
                    <script type="text/javascript">
                    alert('<?php echo $this->session->flashdata('adminn'); ?>');
                    </script>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>


    </div>
    <?php include(APPPATH . 'views/layout/_js.php'); ?>

</body>

</html>
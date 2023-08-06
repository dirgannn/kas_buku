<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php require_once('layout/_css.php'); ?>


</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
        <?php require_once('layout/_navbar.php'); ?>
        <?php require_once('layout/_sidebar.php'); ?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">User</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">User</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn m-3 btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Tambah User</button>
            <?php
            if ($this->session->flashdata('tidaksama')) {
                echo '<div class="alert alert-danger">' . $this->session->flashdata('tidaksama') . '</div>';
            }
            ?>

            <div class="modal fade mt-0" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>

                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('user/simpan') ?>" method="post">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Username</label>
                                    <input type="text" name="username" class="form-control" id="recipient-name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="recipient-name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="recipient-name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="recipient-name" required>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-form-label">Kelas</label>
                                    <div class="col-sm-10">
                                        <select name="kelas" class="form-control">
                                            <option value="X RA">X RA</option>
                                            <option value="X RB">X RB</option>
                                            <option value="X RC">X RC</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-form-label">Level</label>
                                    <div class="col-sm-10">
                                        <select name="level" class="form-control">
                                            <option value="Admin">Admin</option>
                                            <option value="Siswa">Siswa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Send message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="col-12">
                    <?php
                    if ($this->session->flashdata('edit_sucess')) {
                        echo $this->session->flashdata('edit_sucess') . '</div>';
                    }
                    ?>
                    <?php
                    if ($this->session->flashdata('success_user')) {
                        echo $this->session->flashdata('success_user') . '</div>';
                    }
                    ?>
                    <div class="bg-light rounded h-100 p-4">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Level</th>
                                    <th scope="col" class="center">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($user as $pp) { ?>
                                        <tr>
                                            <th scope="row"><?= $no; ?> </th>
                                            <td><?= $pp['username'] ?> </td>
                                            <td><?= $pp['nama'] ?></td>
                                            <td><?= $pp['alamat'] ?></td>
                                            <td><?= $pp['kelas'] ?></td>
                                            <td><?= $pp['level'] ?></td>
                                            <td><button type="button" class="btn btn-success m-2"><a href="<?php echo site_url('user/edit/' . $pp['id_user']) ?>" class="text-light">Edit</a></button>
                                                <button type="button" class="btn btn-danger m-2"><a href="<?php echo site_url('User/delete_data/' . $pp['id_user']); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')" class="text-light">Hapus</a></button>
                                            </td>
                                        </tr>
                                    <?php $no++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    </div>
    <script>
        $(document).ready(function() {
            // Periksa jika URL memiliki #myModal
            if (window.location.hash === '#myModal') {
                // Tampilkan modal dengan menggunakan ID
                $('#exampleModal').modal('show');
            }
        });
    </script>
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
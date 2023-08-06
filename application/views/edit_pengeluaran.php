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
                        <h4 class="page-title">Edit Pengeluaran</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Pengeluaran</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal-body">
                <form action="<?php echo site_url('pengeluaran/update') ?>" method="post">
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?php echo $transaksi['id']; ?>">
                        <label for="recipient-name" class="col-form-label">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" id="recipient-name"
                            value="<?php echo $transaksi['tanggal']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Jumlah</label>
                        <input type="text" name="jumlah" class="form-control" id="recipient-name"
                            value="<?php echo $transaksi['jumlah']; ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    </div>
    </div>
    </div>


    </div>
    <?php include(APPPATH . 'views/layout/_js.php'); ?>

</body>

</html>
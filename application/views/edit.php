<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include(APPPATH . 'views/layout/_css.php'); ?>

</head>

<body>

    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
        <?php include(APPPATH . 'views/layout/_navbar.php'); ?>
        <?php include(APPPATH . 'views/layout/_sidebar.php'); ?>

        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-content-end">
                    <div class="col-5 ">
                        <h4 class="page-title">Edit User</h4>
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


            <div class="modal-body">
                <form action="<?= site_url('user/update/' . $user['id_user']) ?>" method="post">
                    <div class="mb-3">

                        <label for="recipient-name" class="col-form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="recipient-name" value="<?= $user['nama'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="recipient-name" value="<?= $user['password'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="recipient-name" value="<?= $user['alamat'] ?>">
                    </div>
                    <div class="row mb-3">
                        <label class="col-form-label">Kelas</label>
                        <div class="col-sm-10">
                            <select name="kelas" class="form-control">
                                <option value="X RA" <?php echo ($user['kelas'] == 'X RA') ? 'selected' : ''; ?>>X RA
                                </option>
                                <option value="X RB" <?php echo ($user['kelas'] == 'X RB') ? 'selected' : ''; ?>>X RB
                                </option>
                                <option value="X RC" <?php echo ($user['kelas'] == 'X RC') ? 'selected' : ''; ?>>X RC
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--  -->

    </div>
    </div>
    </div>


    </div>
    <?php include(APPPATH . 'views/layout/_js.php'); ?>

</body>

</html>
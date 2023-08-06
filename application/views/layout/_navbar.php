<header class="topbar" data-navbarbg="skin6">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <div class="navbar-header" data-logobg="skin5">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                <i class="ti-menu ti-close"></i>
            </a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-brand">
                <a href="index.html" class="logo">
                    <!-- Logo icon -->
                    <b class="logo-icon">
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="<?= base_url('assets/nicee/') ?>assets/images/logo-icon.png" alt="homepage"
                            class="dark-logo" />
                        <!-- Light Logo icon -->
                        <img src="<?= base_url('assets/nicee/') ?>assets/images/logo-light-icon.png" alt="homepage"
                            class="light-logo" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text">
                        <!-- dark Logo text -->
                        <img src="<?= base_url('assets/nicee/') ?>assets/images/logo-text.png" alt="homepage"
                            class="dark-logo" />
                        <!-- Light Logo text -->
                        <img src="<?= base_url('assets/nicee/') ?>assets/images/kas.png" width="150" height="30"
                            class="light-logo" alt="homepage" />
                    </span>
                </a>
            </div>

        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
            <ul class="navbar-nav float-start me-auto">
                <li class="nav-item search-box">
                    <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                        <div class="d-flex align-items-center">
                            <i class="mdi mdi-magnify font-20 me-1"></i>
                            <div class="ms-1 d-none d-sm-block">
                                <span>Search</span>
                            </div>
                        </div>
                    </a>
                    <form class="app-search position-absolute">
                        <input type="text" class="form-control" placeholder="Search &amp; enter">
                        <a class="srh-btn">
                            <i class="ti-close"></i>
                        </a>
                    </form>
                </li>
            </ul>
            <ul class="navbar-nav float-end">
                <div class="mt-3 ">
                    <h4 style="text-transform: capitalize;" class="mb-0">
                        <?php echo $this->session->userdata('username'); ?>
                    </h4>
                    <span><?php echo $this->session->userdata('level'); ?></span>
                </div>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#"
                        id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?= base_url('assets/nicee/') ?>assets/images/animek.jpeg" alt="user"
                            class="rounded-circle" width="31">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('auth/logout') ?>"><i class="mdi mdi-logout"></i>
                            Logout</a>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
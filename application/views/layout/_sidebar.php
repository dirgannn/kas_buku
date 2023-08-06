<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('home') ?>"
                        aria-expanded="false">
                        <i class="mdi mdi-av-timer"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('pemasukan') ?>"
                        aria-expanded="false">
                        <i class="mdi mdi-cash-usd"></i>
                        <span class="hide-menu">My Transaction</span>
                    </a>
                </li>
                <li class="sidebar-item">

                    <?php if ($this->session->userdata('level') === 'Admin') : ?>
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="<?php echo site_url('pemasukan/add_pemasukan_admin'); ?>" aria-expanded="false">
                        <i class="mdi mdi-credit-card"></i>
                        <span class="hide-menu">Pemasukan</span>
                    </a>
                    <?php else : ?>
                    <!-- Tampilkan link khusus untuk user -->
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="<?php echo site_url('pemasukan/add_pemasukan'); ?>" aria-expanded="false">
                        <i class="mdi mdi-credit-card"></i>
                        <span class="hide-menu">Pemasukan</span>
                    </a>
                    <?php endif; ?>
                </li>
                <li class="sidebar-item">

                    <?php if ($this->session->userdata('level') === 'Admin') : ?>
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="<?php echo site_url('pengeluaran/add_pengeluaran_admin'); ?>" aria-expanded="false">
                        <i class="mdi mdi-credit-card-off"></i>
                        <span class="hide-menu">Pengeluaran</span>
                    </a>
                    <?php else : ?>
                    <!-- Tampilkan link khusus untuk user -->
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="<?php echo site_url('pengeluaran'); ?>" aria-expanded="false">
                        <i class="mdi mdi-credit-card-off"></i>
                        <span class="hide-menu">Pengeluaran</span>
                    </a>
                    <?php endif; ?>
                </li>
                <li class="sidebar-item">
                    <?php if ($this->session->userdata('level') === 'Admin') : ?>
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('user') ?>"
                        aria-expanded="false">
                        <i class="mdi mdi-account"></i>
                        <span class="hide-menu">User</span>
                    </a>
                    <?php else : ?>
                    <a href=""></a>
                    <?php endif; ?>

                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
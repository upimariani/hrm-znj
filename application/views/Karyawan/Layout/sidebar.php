<body>
    <div class="pre-loader"></div>
    <div class="header clearfix">
        <div class="header-right">
            <div class="brand-logo">
                <a href="index.php">
                    <img src="<?= base_url('asset/deskapp-master/') ?>vendors/images/logo.png" alt="" class="mobile-logo">
                </a>
            </div>
            <div class="menu-icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="user-info-dropdown">
            </div>
        </div>
    </div>
    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="index.php">
                <h5>HRM ZNJ BAKERY</h5>
                <h6>KARYAWAN</h6>
            </a>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    <li>
                        <a href="<?= base_url('Karyawan/cDashboard') ?>" class="dropdown-toggle no-arrow <?php if ($this->uri->segment(1) == 'Karyawan' && $this->uri->segment(2) == 'cDashboard') {
                                                                                                                echo 'active';
                                                                                                            }  ?>">
                            <span class="fa fa-home"></span><span class="mtext">Dashboard</span>
                        </a>
                    </li>
                    <?php
                    if ($this->session->userdata('stat_daftar') == '1') {
                    ?>
                        <li>
                            <a href="<?= base_url('Karyawan/cAbsensi') ?>" class="dropdown-toggle no-arrow <?php if ($this->uri->segment(1) == 'Karyawan' && $this->uri->segment(2) == 'cAbsensi') {
                                                                                                                echo 'active';
                                                                                                            }  ?>">
                                <span class="fa fa-server"></span><span class="mtext">Absensi</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('Karyawan/cPenggajian') ?>" class="dropdown-toggle no-arrow <?php if ($this->uri->segment(1) == 'Karyawan' && $this->uri->segment(2) == 'cPenggajian') {
                                                                                                                    echo 'active';
                                                                                                                }  ?>">
                                <span class="fa fa-leaf"></span><span class="mtext">Penggajian</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('Karyawan/cCuti') ?>" class="dropdown-toggle no-arrow <?php if ($this->uri->segment(1) == 'Karyawan' && $this->uri->segment(2) == 'cCuti') {
                                                                                                            echo 'active';
                                                                                                        }  ?>">
                                <span class="fa fa-envelope-open"></span><span class="mtext">Cuti</span>
                            </a>
                        </li>
                    <?php
                    }
                    ?>
                    <li>
                        <a href="<?= base_url('cLoginKaryawan/logout_karyawan') ?>" class="dropdown-toggle no-arrow <?php if ($this->uri->segment(1) == 'Karyawan' && $this->uri->segment(2) == 'cStokBahanBaku') {
                                                                                                                        echo 'active';
                                                                                                                    }  ?>">
                            <span class="fa fa-sign-out"></span><span class="mtext">Logout</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
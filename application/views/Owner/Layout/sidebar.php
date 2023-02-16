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
                <h6>OWNER</h6>
            </a>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">

                    <li>
                        <a href="<?= base_url('Owner/cDashboard') ?>" class="dropdown-toggle no-arrow <?php if ($this->uri->segment(1) == 'Owner' && $this->uri->segment(2) == 'cDashboard') {
                                                                                                            echo 'active';
                                                                                                        }  ?>">
                            <span class="fa fa-home"></span><span class="mtext">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('Owner/cUser') ?>" class="dropdown-toggle no-arrow <?php if ($this->uri->segment(1) == 'Owner' && $this->uri->segment(2) == 'cUser') {
                                                                                                        echo 'active';
                                                                                                    }  ?>">
                            <span class="fa fa-user"></span><span class="mtext">User</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('Owner/cLaporan') ?>" class="dropdown-toggle no-arrow <?php if ($this->uri->segment(1) == 'Owner' && $this->uri->segment(2) == 'cLaporan') {
                                                                                                        echo 'active';
                                                                                                    }  ?>">
                            <span class="fa fa-book"></span><span class="mtext">Laporan</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('cLogin/logout_user') ?>" class="dropdown-toggle no-arrow <?php if ($this->uri->segment(1) == 'Owner' && $this->uri->segment(2) == 'cStokBahanBaku') {
                                                                                                            echo 'active';
                                                                                                        }  ?>">
                            <span class="fa fa-sign-out"></span><span class="mtext">Logout</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
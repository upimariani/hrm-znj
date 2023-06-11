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
				<h6>ADMIN</h6>
			</a>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">

					<li>
						<a href="<?= base_url('Admin/cDashboard') ?>" class="dropdown-toggle no-arrow <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cDashboard') {
																											echo 'active';
																										}  ?>">
							<span class="fa fa-home"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('Admin/cUser') ?>" class="dropdown-toggle no-arrow <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cUser') {
																										echo 'active';
																									}  ?>">
							<span class="fa fa-user-circle"></span><span class="mtext">User</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('Admin/cRecruitment') ?>" class="dropdown-toggle no-arrow <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cRecruitment') {
																											echo 'active';
																										}  ?>">
							<span class="fa fa-user"></span><span class="mtext">Recruitment</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('Admin/cKaryawan') ?>" class="dropdown-toggle no-arrow <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cKaryawan') {
																											echo 'active';
																										}  ?>">
							<span class="fa fa-users"></span><span class="mtext">Karyawan</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('Admin/cAbsensi') ?>" class="dropdown-toggle no-arrow <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cAbsensi') {
																										echo 'active';
																									}  ?>">
							<span class="fa fa-edit"></span><span class="mtext">Absensi</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('Admin/cPenggajian') ?>" class="dropdown-toggle no-arrow <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cPenggajian') {
																											echo 'active';
																										}  ?>">
							<span class="fa fa-tag"></span><span class="mtext">Penggajian Karyawan</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('cLogin/logout_user') ?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-sign-out"></span><span class="mtext">Logout</span>
						</a>
					</li>
				</ul>

			</div>
		</div>
	</div>
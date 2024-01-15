<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>LOGIN HRM ZNJ</title>

	<!-- Site favicon -->
	<!-- <link rel="shortcut icon" href="images/favicon.ico"> -->

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" href="<?= base_url('asset/deskapp-master/') ?>vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>

<body>
	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="login-box bg-white box-shadow pd-30 border-radius-5">
			<!-- <img src="vendors/images/login-img.png" alt="login" class="login-img"> -->
			<h2 class="text-center mb-30">Daftar Karyawan</h2>
			<?php
			if ($this->session->userdata('success')) {
			?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Sukses!</strong> <?= $this->session->userdata('success') ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php
			}
			?>
			<?php
			if ($error != '') {
			?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Gagal!</strong> <?= $error ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php
			}
			?>


			<?php echo form_open_multipart('cLoginKaryawan/daftar'); ?>
			<label>Nama Lengkap</label>
			<div class="input-group custom input-group-lg">
				<input type="text" name="nama" value="<?= set_value('nama') ?>" class="form-control" placeholder="Masukkan Nama Lengkap">
				<div class="input-group-append custom">
					<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
				</div>
				<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
			</div>
			<label>Jenis Kelamin</label>
			<div class="input-group custom input-group-lg">
				<select name="jk" class="form-control">
					<option value=" ">---Pilih Jenis Kelamin---</option>
					<option value="Perempuan" <?php if (set_value('jk') == 'Perempuan') {
													echo 'selected';
												} ?>>Perempuan</option>
					<option value="Laki - Laki" <?php if (set_value('jk') == 'Perempuan') {
													echo 'selected';
												} ?>>Laki - Laki</option>
				</select>
				<?= form_error('jk', '<small class="text-danger">', '</small>') ?>
			</div>
			<label>Alamat</label>
			<div class="input-group custom input-group-lg">
				<textarea type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat"><?= set_value('alamat') ?></textarea>
				<div class="input-group-append custom">
					<span class="input-group-text"><i class="fa fa-map" aria-hidden="true"></i></span>
				</div>
				<?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
			</div>
			<label>No Telepon</label>
			<div class="input-group custom input-group-lg">
				<input type="number" name="no_hp" value="<?= set_value('no_hp') ?>" class="form-control" placeholder="Masukkan No Telepon">
				<div class="input-group-append custom">
					<span class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i></span>
				</div>
				<?= form_error('no_hp', '<small class="text-danger">', '</small>') ?>
			</div>
			<div class="row">
				<div class="col-lg-6"><label>Tempat</label>
					<div class="input-group custom input-group-lg">
						<input type="text" name="tempat" class="form-control" value="<?= set_value('tempat') ?>" placeholder="Tempat Lahir">

						<?= form_error('tempat', '<small class="text-danger">', '</small>') ?>
					</div>
				</div>
				<div class="col-lg-6"><label> Tanggal Lahir</label>
					<div class="input-group custom input-group-lg">
						<input type="date" name="tanggal" class="form-control" value="<?= set_value('tanggal') ?>" placeholder="Masukkan tempat, tanggal lahir">
						<?= form_error('tanggal', '<small class="text-danger">', '</small>') ?>
					</div>
				</div>
			</div>

			<label>Kewarganegaraan</label>
			<div class="input-group custom input-group-lg">
				<select name="kewarganegaraan" class="form-control">
					<option value=" ">---Pilih Kewarganegaraan---</option>
					<option value="WNA" <?php if (set_value('kewarganegaraan') == 'WNA') {
											echo 'selected';
										} ?>>WNA</option>
					<option value="WNI" <?php if (set_value('kewarganegaraan') == 'WNI') {
											echo 'selected';
										} ?>>WNI</option>
				</select>
				<?= form_error('kewarganegaraan', '<small class="text-danger">', '</small>') ?>
			</div>
			<label>Pendidikan Terakhir</label>
			<div class="input-group custom input-group-lg">
				<select name="pend" class="form-control">
					<option value=" ">---Pilih Pendidikan Terakhir---</option>
					<option value="SMA" <?php if (set_value('pend') == 'SMA') {
											echo 'selected';
										} ?>>SMA</option>
					<option value="SMK" <?php if (set_value('pend') == 'SMK') {
											echo 'selected';
										} ?>>SMK</option>
					<option value="D3" <?php if (set_value('pend') == 'D3') {
											echo 'selected';
										} ?>>D3</option>
					<option value="S1" <?php if (set_value('pend') == 'S1') {
											echo 'selected';
										} ?>>S1</option>

				</select>
				<div class="input-group-append custom">
					<span class="input-group-text"><i class="icon-copy fa fa-fa" aria-hidden="true"></i></span>
				</div>
				<?= form_error('pend', '<small class="text-danger">', '</small>') ?>
			</div>
			<label>Agama</label>
			<div class="input-group custom input-group-lg">
				<select name="agama" class="form-control">
					<option value=" ">---Pilih Agama---</option>
					<option value="Islam" <?php if (set_value('agama') == 'Islam') {
												echo 'selected';
											} ?>>Islam</option>
					<option value="Kristen" <?php if (set_value('agama') == 'Kristen') {
												echo 'selected';
											} ?>>Kristen</option>
					<option value="Katolik" <?php if (set_value('agama') == 'Katolik') {
												echo 'selected';
											} ?>>Katolik</option>
					<option value="Hindu" <?php if (set_value('agama') == 'Hindu') {
												echo 'selected';
											} ?>>Hindu</option>
					<option value="Budha" <?php if (set_value('agama') == 'Budha') {
												echo 'selected';
											} ?>>Budha</option>
					<option value="Konghucu" <?php if (set_value('agama') == 'Konghucu') {
													echo 'selected';
												} ?>>Konghucu</option>
				</select>
				<?= form_error('agama', '<small class="text-danger">', '</small>') ?>
			</div>
			<label>Status Kawin</label>
			<div class="input-group custom input-group-lg">
				<select name="stat_kawin" class="form-control">
					<option value=" ">---Pilih Status Kawin---</option>
					<option value="Kawin" <?php if (set_value('stat_kawin') == 'Kawin') {
												echo 'selected';
											} ?>>Kawin</option>
					<option value="Belum Kawin" <?php if (set_value('stat_kawin') == 'Belum Kawin') {
													echo 'selected';
												} ?>>Belum Kawin</option>
					<option value="Cerai" <?php if (set_value('stat_kawin') == 'Cerai') {
												echo 'selected';
											} ?>>Cerai</option>
					<option value="Cerai Mati" <?php if (set_value('stat_kawin') == 'Cerai Mati') {
													echo 'selected';
												} ?>>Cerai Mati</option>
				</select>
				<?= form_error('stat_kawin', '<small class="text-danger">', '</small>') ?>
			</div>
			<label>File Surat Lamaran <span class="text-danger">*pdf</span></label>

			<div class="input-group custom input-group-lg">
				<input type="file" name="surat" class="form-control" value="<?= set_value('surat') ?>" placeholder="Username" required>
				<div class="input-group-append custom">
					<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
				</div>
				<?= form_error('surat', '<small class="text-danger">', '</small>') ?>
			</div>
			<label>Username</label>
			<div class="input-group custom input-group-lg">
				<input type="text" name="username" class="form-control" value="<?= set_value('username') ?>" placeholder="Username">
				<div class="input-group-append custom">
					<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
				</div>
				<?= form_error('username', '<small class="text-danger">', '</small>') ?>
			</div>
			<label>Password</label>
			<div class="input-group custom input-group-lg">
				<input type="password" name="password" class="form-control" value="<?= set_value('password') ?>" placeholder="Password">
				<div class="input-group-append custom">
					<span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
				</div>
				<?= form_error('password', '<small class="text-danger">', '</small>') ?>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="input-group">
						<!--
								use code for form submit
								<input class="btn btn-outline-primary btn-lg btn-block" type="submit" value="Sign In">
							-->
						<button type="submit" class="btn btn-outline-primary btn-lg btn-block" href="index.php">Sign In</button>
						<small>Anda Sebagai Karyawan ZNJ Bakery <a class="text-danger" href="<?= base_url('cLoginKaryawan') ?>">Login Disini!!!</a></small>
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>
	<!-- js -->
	<script src="<?= base_url('asset/deskapp-master/') ?>vendors/scripts/script.js"></script>
</body>

</html>
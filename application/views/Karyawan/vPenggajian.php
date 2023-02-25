<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Informasi Penggajian Karyawan</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Penggajian</li>
							</ol>
						</nav>
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
					</div>
				</div>
			</div>
			<!-- Simple Datatable start -->
			<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">

				<div class="row">
					<table class="data-table stripe hover nowrap">
						<thead>
							<tr>
								<th>Tanggal Gaji</th>
								<th>Total Gaji</th>
								<th>Status Gaji</th>
								<th>Detail Absensi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($gaji as $key => $value) {
								$date = $value->tgl_absensi;
								$tanggal = explode('-', $date);
							?>
								<td><?= $value->tgl_gajian ?>
								</td>
								<td><strong>Rp. <?= number_format($value->tot_gajian) ?></strong><br>
									Gaji Pokok : Rp. <?= number_format($value->gaji_pokok) ?><br>
									Transport : Rp. <?= number_format($value->transport) ?> /hari<br>
									Uang Makan : Rp. <?= number_format($value->uang_makan) ?> /hari<br></td>

								<td><?php if ($value->status_gajian == '0') {
									?>
										<a class="btn btn-success" href="<?= base_url('Karyawan/cPenggajian/konfirmasi/' . $value->id_penggajian) ?>">Konfirmasi Sudah Diterima</a>
									<?php
									} else {
									?>
										<span class="badge badge-success">Sudah Diterima</span>
									<?php
									} ?>
								</td>
								<td> <a class="btn btn-success" href="<?= base_url('Karyawan/cAbsensi/detail_absensi/' . $value->id_karyawan . '/' . $tanggal[1]) ?>">Informasi Detail Absen</a>
								</td>
							<?php
							}
							?>


						</tbody>
					</table>
				</div>
			</div>
			<!-- Simple Datatable End -->
			<!-- multiple select row Datatable start -->

			<!-- Export Datatable End -->
		</div>
		<div class="footer-wrap bg-white pd-20 mb-20 border-radius-5 box-shadow">
			HUMAN RESOURCE MANAGEMENT ZNJ BAKERY
		</div>
	</div>
</div>

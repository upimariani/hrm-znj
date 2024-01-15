<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Informasi Absensi Karyawan</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Absensi</li>
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
				<table class="data-table stripe hover nowrap">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Periode Bulan</th>
							<th>Detail Periode</th>
						</tr>
					</thead>
					<tbody>
						<?php

						$no = 1;
						foreach ($view_periode as $key => $value) {
							$date = $value->tgl_absensi;
							$tanggal = explode('-', $date);
						?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $value->nama_lengkap ?></td>
								<td><?= $tanggal[1] ?></td>
								<td>
									<div class="dropdown">
										<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
											<i class="fa fa-ellipsis-h"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="<?= base_url('Admin/cAbsensi/detailAbsen/' . $value->id_karyawan . '/' . $value->tgl_absensi) ?>" class="dropdown-item"><i class="fa fa-eye"></i> View</a>
										</div>
									</div>
								</td>
							</tr>
						<?php
						}
						?>
					</tbody>
				</table>
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
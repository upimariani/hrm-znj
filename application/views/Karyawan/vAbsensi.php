<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Informasi Absensi Karyawan Per Bulan <?= $this->session->userdata('id'); ?></h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Absensi</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
			<!-- Simple Datatable start -->
			<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
				<div class="row">
					<table class="data-table stripe hover nowrap">
						<thead>
							<tr>
								<th>Absen Bulan</th>
								<th>Tahun</th>
								<th>Detail Informasi Absensi </th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($list_absen['all_periode'] as $key => $value) {
							?>
								<tr>
									<td><?php if ($value->month == 1) {
											echo 'Januari';
										} else if ($value->month == 2) {
											echo 'Februari';
										} else if ($value->month == 3) {
											echo 'Maret';
										} else if ($value->month == 4) {
											echo 'April';
										} else if ($value->month == 5) {
											echo 'Mei';
										} else if ($value->month == 6) {
											echo 'Juni';
										} else if ($value->month == 7) {
											echo 'Juli';
										} else if ($value->month == 8) {
											echo 'Agustus';
										} else if ($value->month == 9) {
											echo 'September';
										} else if ($value->month == 10) {
											echo 'Oktober';
										} else if ($value->month == 11) {
											echo 'November';
										} else if ($value->month == 12) {
											echo 'Desember';
										} ?></td>
									<td><?= $value->year ?></td>
									<td>
										<a class="btn btn-info" href="<?= base_url('Karyawan/cAbsensi/detail_absensi/' . $value->id_karyawan . '/' . $value->month) ?>">Detail Absensi</a>
									</td>
								</tr>
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

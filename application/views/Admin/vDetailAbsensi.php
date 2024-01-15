<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Informasi Absensi Karyawan Per Bulan</h4>
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

				<table class="data-table stripe hover nowrap">
					<thead>
						<tr>
							<th>Tanggal Absensi</th>
							<th>Time Absensi</th>
							<th>Status Absensi</th>
							<th>Approve</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($detail as $key => $value) {
						?>
							<tr>
								<td><?= $value->tgl_absensi ?></td>
								<td><?= $value->time_absensi ?></td>
								<td><?php if ($value->stat_absensi == 1) {
										echo '<span class="badge badge-success">Hadir</span>';
									} else if ($value->stat_absensi == 2) {
										echo '<span class="badge badge-warning">Cuti</span>';
									} else if ($value->stat_absensi == 3) {
										echo '<span class="badge badge-danger">Alpa</span>';
									}  ?></td>
								<td><?php
									if ($value->approved == '0') {
									?>
										<a href="<?= base_url('Admin/cAbsensi/approved/' . $value->id_absensi) ?>" class="btn btn-success">Approved</a>

									<?php
									}
									?>
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
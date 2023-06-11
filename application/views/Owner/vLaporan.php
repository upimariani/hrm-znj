<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Laporan Penggajian</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Laporan Total Penggajian Per Periode</li>
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
					<table class="table">
						<thead>
							<tr>
								<th>No.</th>
								<th>Periode Gaji</th>
								<th>Total Penggajian Karyawan</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($laporan as $key => $value) {
							?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $value->tgl_gajian ?></td>
									<td>Rp. <?= number_format($value->total) ?></td>

								</tr>

							<?php
							}
							?>

						</tbody>
					</table>
					<button class="btn btn-success ml-3" onclick="window.print()"><span class="fa fa-print"></span>Print</button>
				</div>
			</div>
		</div>
		<div class="footer-wrap bg-white pd-20 mb-20 border-radius-5 box-shadow">
			HUMAN RESOURCE MANAGEMENT ZNJ BAKERY
		</div>
	</div>
</div>
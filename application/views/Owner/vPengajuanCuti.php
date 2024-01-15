<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Informasi Pengajuan Cuti</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Pengajuan Cuti</li>
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
							<th>Tanggal Cuti</th>
							<th>Alasan Cuti</th>
							<th>Jumlah Hari</th>
							<th>Status Cuti</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($cuti as $key => $value) {
						?>
							<tr>
								<td><?= $value->tgl_cuti ?></td>
								<td><?= $value->alasan_cuti ?></td>
								<td><?= $value->jml_hari ?></td>
								<td><?php if ($value->stat_cuti == '0') {
									?>
										<a href="<?= base_url('Owner/cCuti/setujui/' . $value->id_cuti) ?>" class="btn btn-success">Disetujui</a>
									<?php
									} else {
									?>
										<span class="badge badge-success">Disetujui</span>
									<?php
									} ?>
								</td>
							</tr>

						<?php
						}
						?>

					</tbody>
				</table>
			</div>
		</div>
		<div class="footer-wrap bg-white pd-20 mb-20 border-radius-5 box-shadow">
			HUMAN RESOURCE MANAGEMENT ZNJ BAKERY
		</div>
	</div>
</div>
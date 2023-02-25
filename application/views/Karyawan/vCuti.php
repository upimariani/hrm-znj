<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Informasi Cuti Karyawan</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Cuti</li>
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
				<div class="clearfix mb-20">
					<div class="pull-left">
						<button class="btn btn-success mb-3" data-toggle="modal" data-target="#bd-example-modal-lg" type="button">Pengajuan Cuti Karyawan</button>

					</div>
				</div>
				<div class="row">
					<table class="data-table stripe hover nowrap">
						<thead>
							<tr>
								<th class="table-plus datatable-nosort">Tanggal Cuti</th>
								<th>Alasan Cuti</th>
								<th>Jumlah Hari</th>
								<th>Status Cuti</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="table-plus">Gloria F. Mead</td>
								<td>25</td>
								<td>Sagittarius</td>
								<td>2829 Trainer Avenue Peoria, IL 61602 </td>

								<td>
									<div class="dropdown">
										<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
											<i class="fa fa-ellipsis-h"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>
											<a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
											<a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Delete</a>
										</div>
									</div>
								</td>
							</tr>

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
<form action="<?= base_url('Karyawan/cCuti/add_cuti') ?>" method="POST">
	<div class="modal fade bs-example-modal-sm" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myLargeModalLabel">Form Pengajuan Cuti Karyawan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Tanggal Cuti</label>
						<input class="form-control" name="tgl_cuti" type="date">
					</div>
					<div class="form-group">
						<label>Jumlah Cuti</label>
						<input class="form-control" name="jml_cuti" type="number" placeholder="Masukkan Jumlah Hari">
					</div>
					<div class="form-group">
						<label>Alasan Cuti</label>
						<textarea class="form-control" name="alasan"></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
</form>

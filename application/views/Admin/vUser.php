<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Informasi User</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">User</li>
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
						<h5 class="text-blue">Akun Admin dan Akun Admin</h5>
						<p class="font-14">Tambahkan data user <a class="text-primary" href="<?= base_url('Admin/cUser/create') ?>">Click Here</a></p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<table id="myTable" class="stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">Nama User</th>
									<th>Alamat User</th>
									<th>No Telepon</th>
									<th>Jenis Kelamin</th>
									<th>Akun User</th>
									<th>Level User</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($user as $key => $value) {
								?>
									<tr>
										<td class="table-plus"><?= $value->nama_user ?></td>
										<td><?= $value->alamat_user ?></td>
										<td><?= $value->no_hp_user ?></td>
										<td><?= $value->jk_user ?> </td>
										<td><span class="badge badge-success"><?= $value->username ?></span><span class="badge badge-warning"> <?= $value->password ?></span></td>
										<td><?php
											if ($value->level_user == '1') {
											?>
												<span class="badge badge-primary">Admin</span>
											<?php
											} else {
											?>
												<span class="badge badge-danger">Admin</span>
											<?php
											}
											?>
										</td>
										<td>
											<div class="dropdown">
												<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
													<i class="fa fa-ellipsis-h"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="<?= base_url('Admin/cUser/edit/' . $value->id_user) ?>"><i class="fa fa-pencil"></i> Edit</a>
													<a class="dropdown-item" href="<?= base_url('Admin/cUser/hapus/' . $value->id_user) ?>"><i class="fa fa-trash"></i> Delete</a>
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

				</div>
			</div>
		</div>
		<div class="footer-wrap bg-white pd-20 mb-20 border-radius-5 box-shadow">
			HUMAN RESOURCE MANAGEMENT ZNJ BAKERY
		</div>
	</div>
</div>
<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Selamat Datang!</strong> Owner...
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="row clearfix progress-box">

			<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
				<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
					<div class="project-info clearfix">
						<div class="project-info-left">
							<div class="icon box-shadow bg-blue text-white">
								<i class="fa fa-briefcase"></i>
							</div>
						</div>
						<div class="project-info-right">
							<span class="no text-blue weight-500 font-24"><?= $informasi['calon_daftar']->jml_calon ?></span>
							<p class="weight-400 font-18">Calon Karyawan</p>
						</div>
					</div>

				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
				<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
					<div class="project-info clearfix">
						<div class="project-info-left">
							<div class="icon box-shadow bg-light-green text-white">
								<i class="fa fa-handshake-o"></i>
							</div>
						</div>
						<div class="project-info-right">
							<span class="no text-light-green weight-500 font-24"><?= $informasi['karyawan']->jml_karyawan ?></span>
							<p class="weight-400 font-18">Karyawan</p>
						</div>
					</div>

				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
				<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
					<div class="project-info clearfix">
						<div class="project-info-left">
							<div class="icon box-shadow bg-light-orange text-white">
								<i class="fa fa-list-alt"></i>
							</div>
						</div>
						<div class="project-info-right">
							<span class="no text-light-orange weight-500 font-24"><?= $informasi['pengajuan_cuti']->jml_cuti ?></span>
							<p class="weight-400 font-18">Pengajuan Cuti</p>
						</div>
					</div>

				</div>
			</div>

		</div>

		<div class="footer-wrap bg-white pd-20 mb-20 border-radius-5 box-shadow">
			HUMAN RESOURCE MANAGEMENT ZNJ BAKERY
		</div>
	</div>
</div>
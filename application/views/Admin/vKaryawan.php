<div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Informasi Karyawan ZNJ Bakery</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Karyawan</li>
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
                                <th class="table-plus datatable-nosort">Foto</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>No Telepon</th>
                                <th>Agama</th>
                                <th>Divisi</th>
                                <th>Jabatan</th>
                                <th>Mulai Awal Bekerja</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($karyawan as $key => $value) {
                            ?>
                                <tr>
                                    <td> <img style="width: 100px;" src="<?= base_url('asset/foto/' . $value->foto) ?>" alt="" class="avatar-photo"></td>
                                    <td class="table-plus"><?= $value->nama_lengkap ?></td>
                                    <td><?= $value->jk_kar ?></td>
                                    <td><?= $value->tempat_tl ?></td>
                                    <td><?= $value->alamat ?></td>
                                    <td><?= $value->no_hp ?></td>
                                    <td><?= $value->agama ?></td>
                                    <td><?= $value->divisi ?></td>
                                    <td><?= $value->jabatan ?></td>
                                    <td><?= $value->mulai_bekerja ?></td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                <i class="fa fa-ellipsis-h"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="<?= base_url('Admin/cKaryawan/hapus/' . $value->id_kar_daftar) ?>"><i class="fa fa-trash"></i> Hapus</a>
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
            <!-- Simple Datatable End -->
            <!-- multiple select row Datatable start -->

            <!-- Export Datatable End -->
        </div>
        <div class="footer-wrap bg-white pd-20 mb-20 border-radius-5 box-shadow">
            HUMAN RESOURCE MANAGEMENT ZNJ BAKERY
        </div>
    </div>
</div>
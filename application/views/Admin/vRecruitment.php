<div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Informasi Recruitment Karyawan</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Recruitment</li>
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
                    <div class="col-lg-12">
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
                                    <th>Status Kawin</th>
                                    <th>File Surat Lamaran</th>
                                    <th class="datatable-nosort">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($daftar as $key => $value) {
                                ?>
                                    <tr>
                                        <td> <img style="width: 150px;" src="<?= base_url('asset/foto/' . $value->foto) ?>" alt="" class="avatar-photo"></td>
                                        <td class="table-plus"><?= $value->nama_lengkap ?></td>
                                        <td><?= $value->jk_kar ?></td>
                                        <td><?= $value->tempat_tl ?></td>
                                        <td><?= $value->alamat ?></td>
                                        <td><?= $value->no_hp ?></td>
                                        <td><?= $value->agama ?></td>
                                        <td><?= $value->stat_kawin ?></td>
                                        <td><a href="<?= base_url('asset/surat/' . $value->surat_lamaran) ?>"><i class="icon-copy fa fa-download" aria-hidden="true"></i> Download</a></td>

                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-h"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="<?= base_url('Admin/cRecruitment/ditolak/' . $value->id_kar_daftar) ?>"><i class="fa fa-times"></i> Ditolak</a>
                                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#bd-example-modal-lg<?= $value->id_kar_daftar ?>" type="button">
                                                        <i class="icon-copy fa fa-thumbs-up" aria-hidden="true"></i> Diterima
                                                    </a>
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
            <!-- Simple Datatable End -->
            <!-- multiple select row Datatable start -->

            <!-- Export Datatable End -->
        </div>
        <div class="footer-wrap bg-white pd-20 mb-20 border-radius-5 box-shadow">
            HUMAN RESOURCE MANAGEMENT ZNJ BAKERY
        </div>
    </div>
</div>

<?php
foreach ($daftar as $key => $value) {
?>
    <form action="<?= base_url('Admin/cRecruitment/diterima/' . $value->id_kar_daftar) ?>" method="POST">
        <div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg<?= $value->id_kar_daftar ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">Calon Karyawan <?= $value->nama_lengkap ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <p>Diterima sebagai...</p>
                        <hr>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Divisi</label>
                                    <input class="form-control" name="divisi" type="text" placeholder="Masukkan Divisi" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <input class="form-control" name="jabatan" type="text" placeholder="Masukkan Jabatan" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mulai Bekerja</label>
                            <input class="form-control" name="tgl" type="date" placeholder="Masukkan Nama User" required>
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
<?php
}
?>
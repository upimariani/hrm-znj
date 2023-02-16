<div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Absensi Karyawan</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Absensi Karyawan</li>
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
            <div class="row">
                <div class="col-lg-6">
                    <!-- Select-2 Start -->
                    <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                        <div class="clearfix">
                            <div class="pull-left">
                                <h4 class="text-blue">Data Karyawan</h4>
                                <p class="mb-30 font-14">Masukkan Data Karyawan</p>
                            </div>
                        </div>
                        <form action="<?= base_url('Admin/cAbsensi/addAbsen') ?>" method="POST">


                            <div class="form-group">
                                <label>Karyawan</label>
                                <select id="karyawan" class="form-control" name="karyawan" style="width: 100%; height: 38px;">
                                    <option value="">---Pilih Karyawan---</option>
                                    <?php
                                    foreach ($karyawan as $key => $value) {
                                    ?>
                                        <option data-nama="<?= $value->nama_lengkap ?>" value="<?= $value->id_karyawan ?>"><?= $value->nama_lengkap ?> | Divisi. <?= $value->divisi ?> | Jabatan. <?= $value->jabatan ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <?= form_error('level_user', ' <small class="form-text text-muted">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input class="nama form-control" name="nama" type="text" placeholder="Masukkan Karyawan" readonly>
                            </div>
                            <div class="form-group">
                                <label>Absensi</label>
                                <select name="absen" class="form-control">
                                    <option value="">--Pilih Keterangan Absensi---</option>
                                    <option value="1">Hadir</option>
                                    <option value="2">Cuti</option>
                                    <option value="3">Alpa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Absensi</label>
                                <input class="form-control" name="tgl" value="<?= date('d-m-y') ?>" type="date" placeholder="Masukkan Nama User">
                            </div>
                            <button class="btn btn-success"><i class="icon-copy fa fa-save" aria-hidden="true"></i> Simpan</button>
                            <a href="<?= base_url('Admin/cAbsensi') ?>" class="btn btn-danger">Kembali</a>
                        </form>
                    </div>
                </div>
                <?php
                $data = $this->cart->contents();
                $qty = 0;
                foreach ($data as $key => $value) {
                    $qty += $value['qty'];
                }
                if ($qty != 0) {
                ?>
                
                <div class="col-lg-6">
                    <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                        <div class="clearfix mb-20">
                            <div class="pull-left">
                                <h4 class="text-blue">List Karyawan</h4>
                                <p>Informasi karyawan yang berhasil absen!!!</p>
                            </div>

                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Status Absen</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($this->cart->contents() as $key => $value) {
                                ?>
                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td><?= $value['karyawan'] ?></td>
                                        <td><?php
                                            if ($value['name'] == '1') {
                                                echo '<span class="badge badge-success">Hadir</span>';
                                            } else if ($value['name'] == '2') {
                                                echo '<span class="badge badge-warning">Cuti</span>';
                                            } else {
                                                echo '<span class="badge badge-danger">Alpa </span>';
                                            }
                                            ?></td>
                                        <td><?= $value['date'] ?></td>
                                        <td><?= $value['time'] ?></td>
                                        <td class="text-center"><a href="<?= base_url('Admin/cAbsensi/hapus/' . $value['rowid']) ?>"><i class="icon-copy fa fa-trash" aria-hidden="true"></i></a></td>
                                    </tr>
                                <?php
                                }
                                ?>

                            </tbody>
                        </table>
                        <a href="<?= base_url('Admin/cAbsensi/save') ?>" class="btn btn-warning"><i class="icon-copy fa fa-save" aria-hidden="true"></i> Simpan</a>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>

        </div>
        <div class="footer-wrap bg-white pd-20 mb-20 border-radius-5 box-shadow">
            HUMAN RESOURCE MANAGEMENT ZNJ BAKERY
        </div>
    </div>
</div>
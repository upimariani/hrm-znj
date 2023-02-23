<div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Informasi Detail Penggajian Karyawan Per Periode</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Penggajian</li>
                            </ol>
                        </nav>
                        <button class="btn btn-success mb-3" data-toggle="modal" data-target="#bd-example-modal-lg" type="button">Masukkan gaji bulan ini</button>
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
                                    <th>No</th>
                                    <th>Tanggal Gajian</th>
                                    <th>Total Gajian</th>
                                    <th>Status Gaji</th>
                                    <th class="datatable-nosort">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($gaji['gaji_periode'] as $key => $value) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $value->tgl_gajian ?></td>
                                        <td><?= $value->tot_gajian ?></td>
                                        <td><?= $value->status_gajian ?></td>
                                        <td><?= $value->id_penggajian ?></td>

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

<form action="<?= base_url('Admin/cPenggajian/add_gaji/' . $id_karyawan) ?>" method="POST">
    <div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Masukkan Rincian Gaji Karyawan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Gaji Pokok</label>
                        <input class="form-control" name="gaji_pokok" type="number" placeholder="Masukkan Gaji Pokok">
                    </div>
                    <div class="form-group">
                        <label>Transport</label>
                        <input class="form-control" name="transport" type="number" placeholder="Masukkan Transport">
                    </div>
                    <div class="form-group">
                        <label>Uang Makan</label>
                        <input class="form-control" name="uang_makan" type="number" placeholder="Masukkan Uang Makan">
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
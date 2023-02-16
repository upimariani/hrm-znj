<div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>Profile</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <?php
                    if ($this->session->userdata('stat_daftar') == '0') {
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Menunggu!</strong> Surat Lamaran masih dalam proses!!!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                    if ($this->session->userdata('stat_daftar') == '1') {
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Sukses!</strong> Anda Merupakan Karyawan ZNJ Bakery!!!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                    if ($this->session->userdata('stat_daftar') == '2') {
                    ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Gagal!</strong> Surat Lamaran anda ditolak!!!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 mb-30">
                    <div class="pd-20 bg-white border-radius-4 box-shadow">
                        <div class="profile-photo">
                            <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                            <img src="<?= base_url('asset/foto/' . $profile->foto) ?>" alt="" class="avatar-photo">
                            <?php echo form_open_multipart('Karyawan/cDashboard/edit_foto/' . $profile->id_kar_daftar); ?>
                            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body pd-5">
                                            <div class="tab-content">

                                                <div class="input-group custom input-group-lg">
                                                    <h3>Foto Anda</h3>
                                                    <input type="file" class="form-control" name="foto">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" value="Update" class="btn btn-primary">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                        <h5 class="text-center"><?= $profile->nama_lengkap ?></h5>
                        <p class="text-center text-muted"><?= $profile->tempat_tl ?></p>
                        <div class="profile-info">
                            <h5 class="mb-20 weight-500">Informasi Data Diri</h5>
                            <ul>
                                <li>
                                    <span>Agama:</span>
                                    <?= $profile->agama ?>
                                </li>
                                <li>
                                    <span>No Telepon:</span>
                                    <?= $profile->no_hp ?>
                                </li>
                                <li>
                                    <span>Kewarganegaraan:</span>
                                    <?= $profile->kewarganegaraan ?>
                                </li>
                                <li>
                                    <span>Alamat:</span>
                                    <?= $profile->alamat ?>
                                </li>
                            </ul>
                        </div>
                        <div class="profile-social mb-3">
                            <h5 class="mb-20 weight-500">Akun</h5>
                            <ul>
                                <li>
                                    <span>Username:</span>
                                    <span class="badge badge-success"><?= $profile->username_kar ?></span>
                                </li>
                                <li>
                                    <span>Password:</span>
                                    <span class="badge badge-warning"><?= $profile->password_kar ?></span>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 mb-30">
                    <div class="bg-white border-radius-4 box-shadow height-100-p">
                        <div class="profile-tab height-100-p">
                            <div class="tab height-100-p">
                                <div class="tab-content">
                                    <div class="profile-setting">
                                        <?php echo form_open_multipart('Karyawan/cDashboard/edit_profile/' . $profile->id_kar_daftar); ?>
                                        <ul class="profile-edit-list row">
                                            <li class="weight-500 col-md-12">
                                                <h4 class="text-blue mb-20">Edit Informasi Data Diri</h4>
                                                <?php echo form_open_multipart('cLoginKaryawan/daftar'); ?>
                                                <label>Nama Lengkap</label>
                                                <div class="input-group custom input-group-lg">
                                                    <input type="text" name="nama" value="<?= $profile->nama_lengkap ?>" class="form-control" placeholder="Masukkan Nama Lengkap">
                                                    <div class="input-group-append custom">
                                                        <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                    </div>
                                                    <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                                                </div>
                                                <label>Jenis Kelamin</label>
                                                <div class="input-group custom input-group-lg">
                                                    <select name="jk" class="form-control">
                                                        <option value=" ">---Pilih Jenis Kelamin---</option>
                                                        <option value="Perempuan" <?php if ($profile->jk_kar == 'Perempuan') {
                                                                                        echo 'selected';
                                                                                    } ?>>Perempuan</option>
                                                        <option value="Laki - Laki" <?php if ($profile->jk_kar == 'Laki - Laki') {
                                                                                        echo 'selected';
                                                                                    } ?>>Laki - Laki</option>
                                                    </select>
                                                    <?= form_error('jk', '<small class="text-danger">', '</small>') ?>
                                                </div>
                                                <label>Alamat</label>
                                                <div class="input-group custom input-group-lg">
                                                    <textarea type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat"><?= $profile->alamat ?></textarea>
                                                    <div class="input-group-append custom">
                                                        <span class="input-group-text"><i class="fa fa-map" aria-hidden="true"></i></span>
                                                    </div>
                                                    <?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
                                                </div>
                                                <label>No Telepon</label>
                                                <div class="input-group custom input-group-lg">
                                                    <input type="text" name="no_hp" value="<?= $profile->no_hp ?>" class="form-control" placeholder="Masukkan No Telepon">
                                                    <div class="input-group-append custom">
                                                        <span class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                    </div>
                                                    <?= form_error('no_hp', '<small class="text-danger">', '</small>') ?>
                                                </div>
                                                <label>Tempat, Tanggal Lahir</label>
                                                <div class="input-group custom input-group-lg">
                                                    <input type="text" name="ttl" class="form-control" value="<?= $profile->tempat_tl ?>" placeholder="Masukkan tempat, tanggal lahir">
                                                    <div class="input-group-append custom">
                                                        <span class="input-group-text"><i class="icon-copy fa fa-calendar" aria-hidden="true"></i></span>
                                                    </div>
                                                    <?= form_error('ttl', '<small class="text-danger">', '</small>') ?>
                                                </div>
                                                <label>Kewarganegaraan</label>
                                                <div class="input-group custom input-group-lg">
                                                    <select name="kewarganegaraan" class="form-control">
                                                        <option value=" ">---Pilih Kewarganegaraan---</option>
                                                        <option value="WNA" <?php if ($profile->kewarganegaraan == 'WNA') {
                                                                                echo 'selected';
                                                                            } ?>>WNA</option>
                                                        <option value="WNI" <?php if ($profile->kewarganegaraan == 'WNI') {
                                                                                echo 'selected';
                                                                            } ?>>WNI</option>
                                                    </select>
                                                    <?= form_error('kewarganegaraan', '<small class="text-danger">', '</small>') ?>
                                                </div>
                                                <label>Pendidikan Terakhir</label>
                                                <div class="input-group custom input-group-lg">
                                                    <input type="text" name="pend" class="form-control" value="<?= $profile->pend_terakhir ?>" placeholder="Masukkan Pendidikan Terakhir">
                                                    <div class="input-group-append custom">
                                                        <span class="input-group-text"><i class="icon-copy fa fa-fa" aria-hidden="true"></i></span>
                                                    </div>
                                                    <?= form_error('pend', '<small class="text-danger">', '</small>') ?>
                                                </div>
                                                <label>Agama</label>
                                                <div class="input-group custom input-group-lg">
                                                    <input type="text" name="agama" class="form-control" value="<?= $profile->agama ?>" placeholder="Masukkan Agama">
                                                    <div class="input-group-append custom">
                                                        <span class="input-group-text"><i class="icon-copy fa fa-fort-awesome" aria-hidden="true"></i></span>
                                                    </div>
                                                    <?= form_error('agama', '<small class="text-danger">', '</small>') ?>
                                                </div>
                                                <label>Status Kawin</label>
                                                <div class="input-group custom input-group-lg">
                                                    <select name="stat_kawin" class="form-control">
                                                        <option value=" ">---Pilih Status Kawin---</option>
                                                        <option value="Kawin" <?php if ($profile->stat_kawin == 'Kawin') {
                                                                                    echo 'selected';
                                                                                } ?>>Kawin</option>
                                                        <option value="Belum Kawin" <?php if ($profile->stat_kawin == 'Belum Kawin') {
                                                                                        echo 'selected';
                                                                                    } ?>>Belum Kawin</option>
                                                    </select>
                                                    <?= form_error('stat_kawin', '<small class="text-danger">', '</small>') ?>
                                                </div>
                                                <label>File Surat Lamaran <span class="text-danger">*pdf</span></label><br>
                                                <a href="<?= base_url('asset/surat/' . $profile->surat_lamaran) ?>"> <?= $profile->surat_lamaran ?></a>
                                                <div class="input-group custom input-group-lg">
                                                    <input type="file" name="surat" class="form-control" value="<?= set_value('surat') ?>" placeholder="Username">
                                                    <div class="input-group-append custom">
                                                        <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                    </div>
                                                    <?= form_error('surat', '<small class="text-danger">', '</small>') ?>
                                                </div>
                                                <label>Username</label>
                                                <div class="input-group custom input-group-lg">
                                                    <input type="text" name="username" class="form-control" value="<?= $profile->username_kar ?>" placeholder="Username">
                                                    <div class="input-group-append custom">
                                                        <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                    </div>
                                                    <?= form_error('username', '<small class="text-danger">', '</small>') ?>
                                                </div>
                                                <label>Password</label>
                                                <div class="input-group custom input-group-lg">
                                                    <input type="password" name="password" class="form-control" value="<?= $profile->password_kar ?>" placeholder="Password">
                                                    <div class="input-group-append custom">
                                                        <span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
                                                    </div>
                                                    <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                                                </div>


                                                <div class="form-group mb-0">
                                                    <input type="submit" class="btn btn-primary" value="Update Information">
                                                </div>
                                            </li>

                                        </ul>
                                        </form>
                                    </div>
                                </div>
                                <!-- Setting Tab End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Perbaharui Data User</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">User</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>

            <!-- Select-2 Start -->
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue">Data User</h4>
                        <p class="mb-30 font-14">Masukkan Data User</p>
                    </div>
                </div>
                <form action="<?= base_url('Owner/cUser/edit/' . $user->id_user) ?>" method="POST">
                    <div class="form-group">
                        <label>Nama User</label>
                        <input class="form-control" name="nama" value="<?= $user->nama_user ?>" type="text" placeholder="Masukkan Nama User">
                        <?= form_error('nama', ' <small class="form-text text-muted">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label>Alamat User</label>
                        <textarea name="alamat" class="form-control"><?= $user->alamat_user ?></textarea>
                        <?= form_error('alamat', ' <small class="form-text text-muted">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label>No Telepon</label>
                        <input class="form-control" value="<?= $user->no_hp_user ?>" name="no_hp" type="text" placeholder="Masukkan No Telepon">
                        <?= form_error('no_hp', ' <small class="form-text text-muted">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jk" style="width: 100%; height: 38px;">
                            <option value="">---Pilih Jenis Kelamin---</option>
                            <option value="Perempuan" <?php if ($user->jk_user == 'Perempuan') {
                                                            echo 'selected';
                                                        } ?>>Perempuan</option>
                            <option value="Laki - Laki" <?php if ($user->jk_user == 'Laki - Laki') {
                                                            echo 'selected';
                                                        } ?>>Laki - Laki</option>
                        </select>
                        <?= form_error('jk', ' <small class="form-text text-muted">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" value="<?= $user->username ?>" name="username" type="text" placeholder="Masukkan Username">
                        <?= form_error('username', ' <small class="form-text text-muted">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" value="<?= $user->password ?>" name="password" type="text" placeholder="Masukkan Password">
                        <?= form_error('password', ' <small class="form-text text-muted">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label>Level User</label>
                        <select class="form-control" name="level_user" style="width: 100%; height: 38px;">
                            <option value="">---Pilih Level User---</option>
                            <option value="1" <?php if ($user->level_user == '1') {
                                                    echo 'selected';
                                                } ?>>Admin</option>
                            <option value="2" <?php if ($user->level_user == '2') {
                                                    echo 'selected';
                                                } ?>>Owner</option>
                        </select>
                        <?= form_error('level_user', ' <small class="form-text text-muted">', '</small>') ?>
                    </div>
                    <button class="btn btn-success">Simpan</button>
                    <a href="<?= base_url('Owner/cUser') ?>" class="btn btn-danger">Kembali</a>
                </form>
            </div>
        </div>
        <div class="footer-wrap bg-white pd-20 mb-20 border-radius-5 box-shadow">
            HUMAN RESOURCE MANAGEMENT ZNJ BAKERY
        </div>
    </div>
</div>
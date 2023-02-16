<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>LOGIN HRM ZNJ</title>

    <!-- Site favicon -->
    <!-- <link rel="shortcut icon" href="images/favicon.ico"> -->

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('asset/deskapp-master/') ?>vendors/styles/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</head>

<body>
    <div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
        <div class="login-box bg-white box-shadow pd-30 border-radius-5">
            <!-- <img src="vendors/images/login-img.png" alt="login" class="login-img"> -->
            <h2 class="text-center mb-30">Login Karyawan</h2>
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
            <?php
            if ($this->session->userdata('error')) {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Gagal!</strong> <?= $this->session->userdata('error') ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
            }
            ?>


            <form action="<?= base_url('cLoginKaryawan') ?>" method="POST">
                <div class="input-group custom input-group-lg">
                    <input type="text" name="username" class="form-control" placeholder="Username">
                    <div class="input-group-append custom">
                        <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                    </div>
                    <?= form_error('username', '<small class="text-danger">', '</small>') ?>

                </div>

                <div class="input-group custom input-group-lg">
                    <input type="password" name="password" class="form-control" placeholder="**********">
                    <div class="input-group-append custom">
                        <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
                    </div>
                    <?= form_error('password', '<small class="text-danger">', '</small>') ?>

                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="input-group">
                            <!--
								use code for form submit
								<input class="btn btn-outline-primary btn-lg btn-block" type="submit" value="Sign In">
							-->
                            <button type="submit" class="btn btn-outline-primary btn-lg btn-block" href="index.php">Sign In</button>
                            <small>Daftarkan anda sebagai calon karyawan ZNJ Bakery <a class="text-danger" href="<?= base_url('cLoginKaryawan/daftar') ?>">Daftar Disini!!!</a></small>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <!-- js -->
    <script src="<?= base_url('asset/deskapp-master/') ?>vendors/scripts/script.js"></script>
</body>

</html>
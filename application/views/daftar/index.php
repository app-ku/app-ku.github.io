<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Daftar - Kontrakan</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url();?>/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= base_url();?>/assets/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url();?>/assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url();?>/assets/images/logo.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?= base_url();?>/assets/images/logolog.png" alt="logo">
              </div>
              <div class="mt-1 mb-2">
                  <a class="btn btn-block btn-info btn-sm font-weight-medium auth-form-btn" href="<?= base_url();?>">Kembali</a>
                </div>
              <h4>Pengguna Baru?</h4>
              <h6 class="font-weight-light">Silahkan Daftar Dengan Mudah</h6>
              <form class="pt-3">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Nama">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <select class="form-control form-control-lg" id="exampleFormControlSelect2">
                    <option>Kota</option>
                    <option>Bandung</option>
                    <option>Jakarta</option>
                    <option>Bekasi</option>
                    <option>Bogor</option>
                    <option>Lainnya</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Kata sandi">
                </div>
                <div class="mt-3">
                  <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="<?= base_url();?>/assets/index.html">DAFTAR</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Punya Account? <a href="<?=base_url('login') ?>" class="text-primary">Login disini</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?= base_url();?>/assets/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?= base_url();?>/assets/js/off-canvas.js"></script>
  <script src="<?= base_url();?>/assets/js/hoverable-collapse.js"></script>
  <script src="<?= base_url();?>/assets/js/template.js"></script>
  <!-- endinject -->
</body>

</html>

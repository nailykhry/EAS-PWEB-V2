
<!DOCTYPE html>
<html lang="en">

<!-- ***** Header ***** -->
<?php include('header.php') ?>

<body>

  <!-- ***** Preloader ***** -->
  <?php include('preloader.php') ?>


  <!-- ***** Header Area ***** -->
  <?php include('navbar.php') ?>

  <!-- SESSION -->
  <?php session_start(); ?>

  <!-- ID TOP -->
  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Seleksi Pegawai</h2>
                    <p>Kementrian Kelautan dan Perikanan Provinsi Jawa Timur</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/logoo.png" alt="logoo top" style="width: 400px; ">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ID UJIAN -->
  <div id="daftar" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4>Daftar <em>Ujian</em></h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>Silahkan lengkapi data diri Anda !</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container text-center">
      <a href="daftar.php"><button class="btn btn-primary">Daftar Ujian</button></a>
    </div>
  </div>


  <div id="berkas" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4>Upload <em>Berkas</em></h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>Silahkan upload berkas Anda !</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container text-center">
      <a href="berkas.php"><button class="btn btn-primary">Upload Berkas</button></a>
    </div>
  </div>
  

  <div id="kartu" class="the-clients">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Cetak <em>Kartu</em> Ujian</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>Berkas Anda telah terverifikasi. Silahkan cetak kartu ujian Anda !</p>
          </div>
        </div>
        <div class="col-lg-12 text-center">
        <a href="cetak.php"><button type="submit" class="btn btn-primary">Cetak Kartu</button></a>
        </div>
      </div>
    </div>
  </div>

  <div id="ujian" class="pricing-tables">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Ujian <em>Seleksi</em> Pegawai</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>Anda diberikan waktu 120 menit untuk mengerjakan ujian. Ujian hanya dapat dilakukan satu kali. Selamat mengerjakan !</p>
          </div>
        </div>
        <div class="col-lg-12 text-center">
          <a href="https://google.com" class="btn btn-primary">Ambil Ujian</a>
        </div>
      </div>
    </div>
  </div> 

  <!-- FOOTER -->
  <?php include('footer.php') ?>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>



  <!-- PHP -->


</body>
</html>
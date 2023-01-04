<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Make Up By Ilmy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Nova - v1.3.0
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="page-index">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="">
        <h1 class="d-flex align-items-center">Make Up By Ilmy</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="produk.php">Produk</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/produk.png');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Produk</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Produk</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="300">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="assets/img/wisuda.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Wisuda</h4>
                <p>Butuh Make Up Wisuda? Kami Solusinya</p>
                <a href="assets/img/wisuda.jpg" title="Wisuda" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-product">
              <img src="assets/img/pagerayu.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pager Ayu</h4>
                <p>Melayani Make Up Pager Ayu</p>
                <a href="assets/img/pagerayu.jpg" title="Pager Ayu" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-branding">
              <img src="assets/img/bridesmaid.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Bridesmaid</h4>
                <p>Siap Melayani Makeup Bridesmaid</p>
                <a href="assets/img/bridesmaid.jpg" title="Bridesmaid" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->
     <!-- ======= Ketersediaan Produk======= -->
     <?php
include_once("conn.php");
$nomer = 1;
$query = "SELECT * FROM tbl_product";

$hasil = mysqli_query($conn, $query);

?>

    <section id="product" class="product">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-center mb-0">Jasa Make Up By Ilmy</h5>
              </div>
              <table class="table text-center mb-0">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Harga</th>

                  </tr>
                </thead>
                    <tbody><?php 
            while ($data=mysqli_fetch_array($hasil)){ ?>
      <tr>
        <td align="center"><?php echo $nomer; ?> .</td>
        <td><?php echo $data['nama'];?></td>    
        <td align="center"><?php echo $data['jenis'];?></td>    
        <td>Rp. <?php echo $data['harga'];?></td>
      </tr>
      <?php $nomer++; } ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End produk -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">


    <div class="footer-legal">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Ilmy Solihat</span></strong>. All Rights Reserved
        </div>
        
      </div>
    </div>
  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
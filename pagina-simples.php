<?php
include_once 'comum.php';
$comum = new Comum();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Metas fixo-->
  <?php 
    echo $comum->getCabecalho();
  ?>

  <meta name='keywords' content='sites, web, institucional, empresa, portifolio, artigo, html, inicio, index, apresentação, serviço, projeto, contato, download'>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php echo $comum->getMenu(); ?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Página Simples</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Página Simples</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <p>
          Exemplo de Pagina Simples
        </p>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php echo $comum->getFooter(); ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
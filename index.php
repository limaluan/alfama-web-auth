<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'login';

$title = 'Alfama Web';
if ($page == 'login') {
  $title = 'Login | Alfama Web';
} else if ($page == 'registrar') {
  $title = 'Criar Conta | Alfama Web';
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $title; ?></title>
  <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/ico" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./assets/libs/bootstrap-5.3.3/css/bootstrap.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="./assets/css/global.css" />

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
    rel="stylesheet" />
</head>

<body class="bg-body overflow-hidden">
  <div class="row vh-100">
    <!-- Authentication Section -->
    <section class="col-12 col-lg-5 position-relative d-flex flex-column gap-4">
      <header class="d-flex justify-content-between align-items-center auth-section-header px-4">
        <img class="col-5" src="./assets/img/logo.svg" alt="Logotipo da Alfama Web">
        <a href="" class="text-primary fs-4 fw-bolder">Saiba mais</a>
      </header>

      <?php
      if ($page === 'login') {
        include 'includes/login-form.php';
      } elseif ($page === 'registrar') {
        include 'includes/register-form.php';
      }
      ?>
    </section>

    <!-- Hero Carousel -->
    <div id="carouselExample" class="carousel slide d-none col-lg-7 d-lg-block ">
      <div class="carousel-inner">
        <div class="carousel-item active hero-section vh-100 w-100">
          <h1>Lorem ipsum dolor sit. 1</h1>
        </div>
        <div class="carousel-item active hero-section vh-100 w-100">
          <h1>Lorem ipsum dolor sit. 2</h1>
        </div>
        <div class="carousel-item active hero-section vh-100 w-100">
          <h1>Lorem ipsum dolor sit. 3</h1>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <script src="./assets/libs/bootstrap-5.3.3/js/bootstrap.js"></script>
</body>

</html>
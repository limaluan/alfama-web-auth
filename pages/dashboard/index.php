<?php
include $_SERVER['DOCUMENT_ROOT'] . '/protect.php'
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
    <link rel="stylesheet" href="/assets/css/dashboard.css" />
    <title>Meu Perfil | Alfama Web</title>
</head>

<body class="d-flex flex-column">
    <header class="container-fluid bg-primary">
      <div class="container py-4">
        <img
          src="../../assets/img/logo-light.svg"
          alt="Logo da Alfama Web"
          height="35"
        />
      </div>
    </header>

    <main class="user-data-container px-5">
      <form class="m-auto mt-5">
        <div class="row flex-column align-items-center">
          <img class="rounded-circle w-25" src="https://avatars.githubusercontent.com/u/83187601?s=400&u=cdf311d37c919325e63aed73fb177b76a9c20894&v=4" alt=""/>
          <button type="button" class="bg-primary rounded-circle">
            <i class="bi bi-camera text-white fs-2"></i>
          </button>
        </div>
        <div class="row justify-content-center gap-1 mt-4 mb-4">
          <h1 class="text-center fs-4"><?php echo $_SESSION['user']['full_name']; ?></h1>
          <h3 class="text-center fs-5">Membro</h3>
        </div>
        <div class="row">
          <div class="mb-3 col-12 col-md-6">
            <label for="exampleFormControlInput1" class="form-label fw-semibold ms-3">Nome Completo</label>
            <input type="text" required class="form-control p-3" id="full_name" name="full_name"
                placeholder="Digite seu nome" value="<?php echo $_SESSION['user']['full_name']; ?>">
          </div>
          <div class="mb-3 col-12 col-md-6">
            <label for="exampleFormControlInput1" class="form-label fw-semibold ms-3">Email</label>
            <input type="email" required class="form-control p-3" id="email" name="email"
                placeholder="Digite seu email" value="<?php echo $_SESSION['user']['email'] ?>">
          </div>
        </div>
        <div class="row">
          <div class="mb-3 col-12 col-md-6">
            <label for="exampleFormControlInput1" class="form-label fw-semibold ms-3">Telefone</label>
            <input type="number" required class="form-control p-3" id="phone" name="phone"
                placeholder="Digite seu telefone" value="<?php echo $_SESSION['user']['phone'] ?>">
          </div>
          <div class="mb-3 col-12 col-md-6">
            <label for="exampleFormControlInput1" class="form-label fw-semibold ms-3">CPF</label>
            <input type="text" required class="form-control p-3" id="cpf" name="cpf"
                placeholder="Digite seu CPF" value="<?php echo $_SESSION['user']['cpf'] ?>">
          </div>
        </div>
        <div class="row">
          <div class="mb-3 col-12 col-md-6">
            <label for="exampleFormControlInput1" class="form-label fw-semibold ms-3">Empresa</label>
            <input type="text" required class="form-control p-3" id="company" name="company"
                placeholder="Digite sua empresa" value="<?php echo $_SESSION['user']['company'] ?>">
          </div>
          <div class="mb-3 col-12 col-md-6">
            <label for="exampleFormControlInput1" class="form-label fw-semibold ms-3">Endereço</label>
            <input type="text" required class="form-control p-3" id="address" name="address"
                placeholder="Digite seu endereço" value="<?php echo $_SESSION['user']['address'] ?>">
          </div>
        </div>
        <div class="row justify-content-center pb-5">
          <button
            type="submit"
            class="btn btn-primary col-8 col-sm-5 p-3 fw-bold mt-4">
            Atualizar cadastro
          </button>
        </div>
      </form>
    </main>

    <script src="../../assets/libs/bootstrap-5.3.3/js/bootstrap.js"></script>
  </body>

</html>
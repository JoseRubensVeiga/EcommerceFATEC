<?php
session_start();
$hasError = false;

if (isset($_SESSION['feedback'])) {
  $hasError = true;
  $error = $_SESSION["feedback"];

  unset($_SESSION["feedback"]);
}

?>
<html lang="pt-BR">
<head>
  <title>Login</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="login-body">
  <div class="container-fluid h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col col-md-6 col-lg-4 col-xl-3">
        <form method="post" action="criarSessao.php">
          <h1 class="font-weight-light">Entrar</h1>
          <div class="form-group">
            <label>E-mail</label>
            <input type="email" class="form-control" name="email" value="rogenelsom@email.com" />
          </div>
          <div class="form-group">
            <label>Senha</label>
            <input type="password" class="form-control" name="password" value="rogenelsom123" />
          </div>
          <button type="submit" class="btn btn-primary btn-block"> Entrar </button>
        </form>
        <?php if ($hasError) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Ops!</strong> <?php echo $error; ?> <button type="button" class="close" data-dismiss="alert"
            aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <script src="js/script.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php



?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YourSneakers - Painel de controle</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color: #f1f1f1">
  <div class="d-flex">
    <?php include_once('./parts/sidebar.php'); ?>
    <div class="row w-100">
      <div class="col-12 p-5">
        <h1>Criar um novo cliente </h1>
        <form method="POST" action="logica-criar-cliente.php" class="bg-light border borde-radius-3 p-4">
          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" name="senha" class="form-control">
          </div>
          <button type="submit" class="btn btn-info px-5">Criar</button>
        </form>
      </div>
    </div>
  </div>

  <script src="assets/js/script.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
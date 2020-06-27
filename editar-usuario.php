<?php

$usuarioId = $_GET['id'];

include('app/conexao.php');

$sql = "SELECT * FROM usuarios WHERE id = $usuarioId";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_OBJ)[0];

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
        <h1>Editar o Usuario <?php echo $usuarioId; ?></h1>
        <form method="POST" action="logica-editar-usuario.php" class="bg-light border borde-radius-3 p-4">
          <input type="hidden" name="usuarioId" value="<?php echo $usuarioId; ?>">
          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" value="<?php echo $result->nome; ?>">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo $result->email; ?>">
          </div>
          <button type="submit" class="btn btn-info px-5">Alterar</button>
        </form>
      </div>
    </div>
  </div>

  <script src="assets/js/script.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
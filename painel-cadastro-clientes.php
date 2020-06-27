<?php

include_once('app/consulta-clientes.php');

$clientes = consultarClientes();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YourSneakers - Painel de controle</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body style="background-color: #f1f1f1">
  <div class="d-flex">
    <?php include_once('./parts/sidebar.php'); ?>
    <div class="row w-100">
      <div class="col-12 p-5">
        <div class="d-flex justify-content-between align-items-center">
          <h1>Clientes</h1>
          <a href="criar-cliente.php" class="btn btn-success">Criar novo Cliente</a>
        </div>
        <table class="table w-100 table-striped table-hover bg-light border">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nome</th>
              <th>Email</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($clientes as $cliente) : ?>
            <tr>
              <td><?php echo $cliente->id; ?></td>
              <td><?php echo $cliente->nome; ?></td>
              <td><?php echo $cliente->email; ?></td>
              <td class="d-flex">
                <form action="excluir-cliente.php" method="POST">
                  <input type="hidden" name="clienteIdExcluir" value="<?php echo $cliente->id; ?>">
                  <button type="submit" class="simple-button"><i class="fa fa-trash icone text-danger"></i></button>
                </form>
                <a href="editar-cliente.php?id=<?php echo $cliente->id; ?>"><i class=" fa fa-pencil icone text-primary
                  ml-3"></i></a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="assets/js/script.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
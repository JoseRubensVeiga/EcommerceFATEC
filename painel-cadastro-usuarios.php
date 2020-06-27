<?php

include_once('app/consulta-usuarios.php');

$usuarios = consultarUsuarios();

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
          <h1>Usuários</h1>
          <a href="criar-usuario.php" class="btn btn-success">Criar novo Usuario</a>
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
            <?php foreach ($usuarios as $usuario) : ?>
            <tr>
              <td><?php echo $usuario->id; ?></td>
              <td><?php echo $usuario->nome; ?></td>
              <td><?php echo $usuario->email; ?></td>
              <td class="d-flex">
                <form action="excluir-usuario.php" method="POST">
                  <input type="hidden" name="usuarioIdExcluir" value="<?php echo $usuario->id; ?>">
                  <button type="submit" class="simple-button"><i class="fa fa-trash icone text-danger"></i></button>
                </form>
                <a href="editar-usuario.php?id=<?php echo $usuario->id; ?>"><i class=" fa fa-pencil icone text-primary
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
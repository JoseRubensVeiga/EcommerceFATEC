<?php

include('app/consulta-produtos.php');

$produtos = consultarProdutos();

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
          <h1>Produtos</h1>
          <a href="criar-produto.php" class="btn btn-success">Criar novo Produto</a>
        </div>
        <table class="table w-100 table-striped table-hover bg-light border">
          <thead>
            <tr>
              <th>Id</th>
              <th>Descrição</th>
              <th>Preço</th>
              <th>Imagem</th>
              <th>Destaque?</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($produtos as $produto) : ?>
            <tr>
              <td><?php echo $produto->id; ?></td>
              <td><?php echo $produto->descricao; ?></td>
              <td><?php echo $produto->preco; ?></td>
              <td>
                <a href="<?php echo $produto->img; ?>" target="_blank">
                  <img src="<?php echo $produto->img; ?>" alt="" style="width: 50px; height: 50px;">
                </a>
              </td>
              <td>
                <?php echo $produto->fl_destaque == 0 ? 'NÃO' : 'SIM'; ?>
              </td>
              <td class="d-flex">
                <form action="excluir-produto.php" method="POST">
                  <input type="hidden" name="produtoIdExcluir" value="<?php echo $produto->id; ?>">
                  <button type="submit" class="simple-button"><i class="fa fa-trash icone text-danger"></i></button>
                </form>
                <a href="editar-produto.php?id=<?php echo $produto->id; ?>">
                  <i class=" fa fa-pencil icone text-primary ml-3"></i>
                </a>
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
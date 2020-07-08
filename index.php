<?php

if (session_id() == "") {
  session_start();
}

include('app/consulta-produtos.php');
$comPesquisa = false;

if (isset($_GET['descricao'])) {
  $_produtos = consultarProdutosDescricao(trim($_GET['descricao']));
  $comPesquisa = true;
} else {
  $_produtos = consultarProdutos();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YourSneakers - Sua loja de tênis de basquete on-line!</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <?php include_once('./parts/navbar.php'); ?>
  <div class="cta-index">
    <?php if ($comPesquisa) : ?>
    Resultado da pesquisa "<?php echo $_GET['descricao']; ?>"
    <?php else : ?>
    Página inicial
    <?php endif; ?>
  </div>
  <div class="row p-5">
    <div class="col-3">
      <?php include_once('./parts/filtro.php'); ?>
    </div>
    <div class="col-9">
      <?php if (count($_produtos) == 0) : ?>
      <h1 class="display-4 text-center">Ops, nenhum produto foi encontrado. =(</h1>
      <a href="index.php" class="text-danger text-center d-block">Voltar</a>
      <?php else : ?>
      <?php if (!$comPesquisa) : ?>
      <div class="row">
        <div class="col-12">
          <?php include_once('./parts/slide-produtos-destaque.php'); ?>
        </div>
      </div>
      <?php endif; ?>
      <div class="products-container">
        <?php foreach ($_produtos as $produto) : ?>
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="<?php echo $produto->img; ?>" alt="<?php echo $produto->descricao; ?>">
          <div class="card-body">
            <h5 class="card-title">
              <?php echo $produto->descricao; ?>
            </h5>
            <p class="card-text">
              RS <?php echo $produto->preco; ?>
            </p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <?php if ($comPesquisa) : ?>
      <a href="index.php" class="text-danger ">Voltar</a>
      <?php endif; ?>
      <?php endif; ?>
    </div>
  </div>
  <?php include_once('./parts/comentarios.php'); ?>
  <?php include_once('./parts/footer.php'); ?>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>
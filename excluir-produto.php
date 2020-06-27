<?php

if (isset($_POST['produtoIdExcluir'])) {
  $produtoIdExcluir = $_POST['produtoIdExcluir'];
  require('app/conexao.php');
  $sql = "DELETE FROM produtos WHERE id = $produtoIdExcluir";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
}

header('Location: painel-cadastro-produtos.php');
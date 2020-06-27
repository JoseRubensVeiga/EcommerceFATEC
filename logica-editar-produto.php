<?php

include('app/conexao.php');
if (isset($_POST['descricao']) && isset($_POST['img']) && isset($_POST['preco'])) {
  extract($_POST);
  $destaque = isset($flDestaque) ? 1 : 0;
  $sql = "UPDATE produtos SET descricao = '$descricao', img = '$img', preco = $preco, fl_destaque = $destaque WHERE id = $produtoId";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
}

header('Location: painel-cadastro-produtos.php');
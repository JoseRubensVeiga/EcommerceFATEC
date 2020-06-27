<?php

include('app/conexao.php');
if (isset($_POST['descricao']) && isset($_POST['img']) && isset($_POST['preco'])) {
  extract($_POST);
  $destaque = isset($flDestaque) ? 1 : 0;
  $sql = "INSERT INTO produtos (descricao, img, preco, fl_destaque) VALUES ('$descricao', '$img', $preco, $destaque)";
  var_dump($sql);
  $stmt = $conn->prepare($sql);
  $stmt->execute();
}

header('Location: painel-cadastro-produtos.php');
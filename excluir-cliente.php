<?php

if (isset($_POST['clienteIdExcluir'])) {
  $clienteIdExcluir = $_POST['clienteIdExcluir'];
  require('app/conexao.php');
  $sql = "DELETE FROM usuarios WHERE id = $clienteIdExcluir";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
}

header('Location: painel-cadastro-clientes.php');
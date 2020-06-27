<?php

include('app/conexao.php');
if (isset($_POST['nome']) && isset($_POST['email'])) {
  extract($_POST);
  $sql = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = $clienteId";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
}

header('Location: painel-cadastro-clientes.php');
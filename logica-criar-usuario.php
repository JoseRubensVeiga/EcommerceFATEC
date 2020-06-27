<?php

include('app/conexao.php');
if (isset($_POST['nome']) && isset($_POST['email'])) {
  extract($_POST);
  $sql = "INSERT INTO usuarios (nome, email, fl_cliente, senha) VALUES ('$nome', '$email', 0, '$senha')";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
}

header('Location: painel-cadastro-usuarios.php');
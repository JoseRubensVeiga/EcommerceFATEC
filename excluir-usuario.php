<?php

if (isset($_POST['usuarioIdExcluir'])) {
  $usuarioIdExcluir = $_POST['usuarioIdExcluir'];
  require('app/conexao.php');
  $sql = "DELETE FROM usuarios WHERE id = $usuarioIdExcluir";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
}

header('Location: painel-cadastro-usuarios.php');
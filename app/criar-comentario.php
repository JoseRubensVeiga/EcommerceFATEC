<?php

function criarComentario($titulo, $texto)
{
  require('conexao.php');
  $userId = $_SESSION['user']->id;
  $sql = "INSERT INTO comentarios (usuario_id, titulo, texto) VALUES ($userId, '$titulo', '$texto')";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_OBJ);
  return $result;
}
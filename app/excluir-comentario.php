<?php

function excluirComentario($comentarioId)
{
  require('conexao.php');
  $sql = "DELETE FROM comentarios WHERE id = $comentarioId";
  var_dump($sql);
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_OBJ);
  return $result;
}
<?php

function consultarComentarios()
{
  require('conexao.php');
  $sql = '
    SELECT c.id, u.nome as nome_usuario, c.titulo, c.texto, c.data_criacao
    FROM comentarios as c
    INNER JOIN usuarios as u
    ON u.id = c.usuario_id;';
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_OBJ);
  return $result;
}
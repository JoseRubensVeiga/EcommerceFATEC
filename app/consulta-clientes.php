<?php

function consultarClientes()
{
  require_once('conexao.php');
  $sql = 'SELECT * FROM usuarios WHERE fl_cliente = 1';
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_OBJ);
  return $result;
}
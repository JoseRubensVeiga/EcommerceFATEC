<?php

function consultarProdutos()
{
  require('conexao.php');
  $sql = 'SELECT * FROM produtos';
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_OBJ);
  return $result;
}

function consultarProdutosDescricao($descricao)
{
  require('conexao.php');
  $sql = "SELECT * FROM produtos
  WHERE descricao LIKE '%$descricao%'";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_OBJ);
  return $result;
}

function consultarProdutosDestaque()
{
  require('conexao.php');
  $sql = 'SELECT * FROM produtos WHERE fl_destaque = 1';
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_OBJ);
  return $result;
}
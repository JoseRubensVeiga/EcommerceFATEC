<?php

session_start();

function requestIsValid(): bool
{
  return isset($_POST['email']) && isset($_POST['password']);
}

function verificarLogin()
{
  $emailDigitado = $_POST['email'];
  $senhaDigitada = $_POST['password'];

  require('./app/conexao.php');

  $stmt = $conn->prepare('SELECT * FROM usuarios WHERE email = :email AND senha = :senha');
  $stmt->bindParam('email', $emailDigitado);
  $stmt->bindParam('senha', $senhaDigitada);
  $stmt->execute();

  $result = $stmt->fetchAll(PDO::FETCH_OBJ);

  if ($result) {
    $user = (object) $result[0];

    $_SESSION['user'] = $user;
    $_SESSION['logado'] = true;
    header('Location: index.php');
    
  } else {
    $_SESSION['feedback'] = "Login ou senha incorretos";
    header('Location: index.php');
  }
}

if (requestIsValid()) {
  verificarLogin();
} else {
  header('Location: index.php');
}
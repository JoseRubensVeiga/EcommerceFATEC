<?php
session_start();

if (isset($_SESSION['logado'])) {
  header('Location: inicio.php');
}else {
  header('Location: login.php');
}
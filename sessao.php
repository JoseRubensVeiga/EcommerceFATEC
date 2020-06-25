<?php
session_start();
$hasError = false;

if (isset($_SESSION['feedback'])) {
  $hasError = true;
  $error = $_SESSION["feedback"];

  unset($_SESSION["feedback"]);
}
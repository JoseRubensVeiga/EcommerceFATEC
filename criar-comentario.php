<?php

include_once(__DIR__ . '/app/session.php');
include_once(__DIR__ . '/app/criar-comentario.php');

if (isset($_POST['titulo']) && isset($_POST['texto'])) {
  criarComentario($_POST['titulo'], $_POST['texto']);
}

header('Location: index.php');
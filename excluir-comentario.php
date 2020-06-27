<?php
include_once(__DIR__ . '/app/excluir-comentario.php');

if (isset($_POST['comentarioIdExcluir'])) {
  excluirComentario($_POST['comentarioIdExcluir']);
}

header('Location: index.php');